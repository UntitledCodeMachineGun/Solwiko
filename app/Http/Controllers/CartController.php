<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
        return view('cart', compact('order', 'categories'));
    }

    public function submitOrder()
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('submit-order', compact('categories', 'order'));
    }

    public function confirmOrder(Request $request)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $result = $order->saveOrder($request->name, $request->surname, $request->fathersname, $request->phone,
                                    $request->city, $request->post_stantion_number, $request->phone_accept, $request->add_message);

        if($result) {
            session()->flash('result', 'Ваш заказ принят в обработку.');
        }
        else {
            session()->flash('warning', 'Ошибка!');
        }

        Order::ereaseOrderPrice();

        return redirect()->route('index');
    }

    public function cartAdd($productId)
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }

        if(Auth::check()){
            $order->user_id = Auth::id();
            $order->save();
        }

        $product = Product::find($productId);

        Order::changeFullPrice($product->price);

        return redirect()->route('cart');
    }
    public function cartRemove($productId)
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('cart');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;

            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        $product = Product::find($productId);

        Order::changeFullPrice(-$product->price);

        return redirect()->route('cart');
    }
}
