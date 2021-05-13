<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::get();

        return view('auth.news.index', compact('news'));
    }


    public function create()
    {
        return view('auth.news.form');
    }


    public function store(NewsRequest $request)
    {
        $path = $request->file('image')->store('news');
        $params = $request->all();
        $params['image'] = $path;
        News::create($params);
        return redirect()->route('news.index');
    }


    public function show(News $news)
    {
        return view('auth.news.show', compact('news'));
    }


    public function edit(News $news)
    {
        return view('auth.news.form', compact('news'));
    }


    public function update(NewsRequest $request, News $news)
    {
        $params = $request->all();
        unset($params['image']);
        if($request->has('image')) {
            Storage::delete($news->image);
            $path = $request->file('image')->store('news');
            $params['image'] = $path;
        }
        
        
        $news->update($params);

        return redirect()->route('news.index');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }
}
