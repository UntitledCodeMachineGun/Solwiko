<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFilterRequest;
use App\Models\Category;
use App\Models\Texts;
use App\Models\Product;
use App\Models\News;
use App\Http\Repositories\IProductsRepository;
use App\Http\Repositories\ElasticsearchRepository;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class MainController extends Controller
{


    public function index(ProductsFilterRequest $request)
    {
        $productsQuery = Product::with('category');
        // if($request->filled('search')) {
        //     $productsQuery->where('name', 'regexp', $request->search);
        // }

        if($request->filled('price_from')) {
            $productsQuery->where('price', '>=', $request->price_from);
        }

        if($request->filled('price_to')) {
            $productsQuery->where('price', '<=', $request->price_to);
        }

        foreach(['hit','new','recommend'] as $field) {
            if($request->has($field)) {
                $productsQuery->$field();
            }
        }

        $products = $productsQuery->paginate(8)->withPath("?" . $request->getQueryString());
        $categories = Category::get();
        $news = News::get();
        $text = Texts::where('code', 'home')->first();
        return view('index', compact('categories', 'text', 'products', 'news'));
    }

    public function search(ElasticsearchRepository $repository)
    {
        $categories = Category::get();
        $news = News::get();
        $text = Texts::where('code', 'home')->first();

        $result = $repository->search((string) request('search'));
        $products = $this->paginate($result);
        return view('index', compact('categories', 'text', 'products', 'news'));
    }

    public function paginate($items, $perPage = 8, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function blog($id = null)
    {
        $categories = Category::get();

        $news = News::paginate(8);
        if ($id == null)
            return view('blog', compact('categories', 'news'));
        else
            return view('news-page', compact('categories'));
    }

    public function contact()
    {
        $categories = Category::get();

        return view('contact', compact('categories'));
    }

    public function info()
    {
        $categories = Category::get();

        return view('text-page', compact('categories'));
    }
    public function user()
    {
        $categories = Category::get();
        return view('user-info', compact('categories'));
    }
    public function category($code, ProductsFilterRequest $request)
    {
        $categories = Category::get();

        $category = Category::where('code', $code)->first();
        $productsQuery = $category->products();
        

        if($request->filled('search')) {
            $productsQuery->where('name', 'like', $request->search);
        }

        if($request->filled('price_from')) {
            $productsQuery->where('price', '>=', $request->price_from);
        }

        if($request->filled('price_to')) {
            $productsQuery->where('price', '<=', $request->price_to);
        }

        foreach(['hit','new','recommend'] as $field) {
            if($request->has($field)) {
                $productsQuery->where($field, 1);
            }
        }
        $products = $productsQuery->paginate(12);
        return view('category', compact('category', 'categories', 'code', 'products'));

    }
    public function product($category, $productCode) {
        $categories = Category::get();
        $product = Product::withTrashed()->byCode($productCode)->first();
        return view('product', compact('product', 'categories', 'category'));
    }
}
