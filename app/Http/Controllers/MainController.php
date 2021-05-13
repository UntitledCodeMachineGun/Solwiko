<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Texts;
use App\Models\Product;
use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();
        $news = News::get();
        $text = Texts::where('code', 'home')->first();
        return view('index', compact('categories', 'text', 'products', 'news'));
    }
    public function blog($id = null)
    {
        $categories = Category::get();
        $news = News::get();
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
    public function category($code)
    {
        $categories = Category::get();
        foreach ($categories as $cat) {
            if ($code == $cat->code) {
                $category = Category::where('code', $code)->first();
                return view('category', compact('category', 'categories', 'code'));
            }
        }
        return view('page-404', compact('categories'));
    }
    public function product($code, $product)
    {
        $categories = Category::get();
        foreach ($categories as $cat) {
            if ($code == $cat->code) {
                $category = Category::where('code', $code)->first();
                return view('product', compact('category', 'categories', 'code'));
            }
        }
        return view('page-404', compact('categories'));
    }
}
