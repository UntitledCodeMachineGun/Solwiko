@extends('layouts.master')
@section('title', 'Главная')
@section('content')

    <section class="home-slider">
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide block">
                        <img src="img/sec1banner1.jpg" alt="bannersec1">
                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <a href="">Lorem.</a>
                    </div>
                    <div class="swiper-slide block">
                        <img src="img/sec1banner1.jpg" alt="bannersec1">
                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <a href="">Lorem.</a>
                    </div>
                    <div class="swiper-slide block">
                        <img src="img/sec1banner1.jpg" alt="bannersec1">
                        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <a href="">Lorem.</a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section class="home-menu main">
        <div class="container">
            <h3>Категории</h3>
            <div class="swiper-container-menu">
                <div class="swiper-wrapper">
                    @foreach ($categories as $cat)
                        <a href="/{{ $cat->code }}" class="swiper-slide">
                            <span>{{ $cat->name }}</span>
                        </a>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section class="home-products main">
        <div class="container">
            <h3 class="home-products-header">Какие-то там товары</h3>
            <div class="products-wrapper">

                @foreach ($products as $product)
                    @include('card', compact('product'))
                @endforeach

            </div>
            <nav class="pagination-block">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <section class="home-text">
        <div class="container">
            <div class="swiper-container-text">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        {!! $text->text !!}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="home-news">
        <div class="container">
            <h3>Какие-то новости</h3>
            <div class="swiper-container-news">
                <div class="swiper-wrapper">
                    @foreach ($news as $item)
                    <div class="swiper-slide">
                        
                            @include('news-card', compact('item'))
                        
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
@endsection
