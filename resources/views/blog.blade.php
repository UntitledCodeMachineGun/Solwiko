@extends('layouts.master')
@section('title', 'Блог')
@section('content')

    <section class="home-products blog-page">
        <div class="container">
            <div class="top-wrapper">
                <h3 class="home-products-header blog-header">Какие-то там новости</h3>
            </div>
            <div class="products-wrapper news-wrapper">

                @foreach ($news as $item)
                    @include('news-card', compact('item'))
                @endforeach


            </div>

            {{ $news->links() }}
        </div>
    </section>
@endsection
