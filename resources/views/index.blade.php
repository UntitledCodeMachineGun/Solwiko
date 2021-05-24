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
            <div class="top-wrapper">
                <h3 class="home-products-header">Какие-то там товары</h3>
                <button class="profile" data-toggle="modal" data-target="#filters">Фильтры</button>
            </div>
            
            <div class="products-wrapper">

                @foreach ($products as $product)
                    @include('card', compact('product'))
                @endforeach

            </div>
            {{ $products->links() }}
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

    <!-- Filter -->
<div class="modal fade" id="filters" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <div class="top-modal">
            <i class="fas fa-filter"></i>
            <div class="modal-title">Фильтры</div>
          </div>
          <form class="modal-form" action="{{route("index")}}" method="GET">
            <ul class="filters-list">
              {{-- <li>
                <span>Сортировка</span>
                <select name="" id="">
                  <option value="">Обычная</option>
                  <option value="">Цена спадание</option>
                  <option value="">Цена увеличение</option>
                </select>
              </li> --}}
              <li>
                <label for="price_from">Цена от
                    <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from }}">
                </label>
                <label for="price_to">до
                    <input type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                </label>
              </li>
              <li>
                <label for="new">Новинки
                <input type="checkbox" id="new" name="new" @if(request()->has('new')) checked @endif>
                </label>
              </li>
              <li>
                <label for="hit">Хит продаж
                <input type="checkbox" id="hit" name="hit" @if(request()->has('hit')) checked @endif>
                </label>
              </li>
              <li>
                <label for="recommend">Рекомендуем
                <input type="checkbox" id="recommend" name="recommend" @if(request()->has('recommend')) checked @endif>
                </label>
              </li>
            </ul>
            <div class="buttons">
                <button type="submit" >Применить</button>
                <a href="{{ route("index") }}" class="btn">Сброс</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection
