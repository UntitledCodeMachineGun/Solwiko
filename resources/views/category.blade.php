@extends('layouts.master')
@section('title', $category->name)
@section('content')

  <section class="home-menu cat-page">
    <div class="container">
      <div class="swiper-container-menu">
        <div class="swiper-wrapper">
          @foreach ($categories as $cat)
          @if ($code == $cat->code)
            @php
                $active = 'active';
            @endphp
          @else
            @php
              $active =' ';
            @endphp
          @endif
          <a href="/{{$cat->code}}" class="swiper-slide {{$active}}">
            <span>{{$cat->name}}</span>
          </a>
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <section class="home-products cat-page">
    <div class="container">
      <div class="top-wrapper">
        <h3 class="home-products-header">{{$category->name}}</h3>
        <span>{{$category->products->count()}}</span>
        <button class="profile" data-toggle="modal" data-target="#filters">Фильтры</button>
      </div>
      <div class="products-wrapper">

        @foreach ($category->products as $product)
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


  <section class="home-text cat-page">
    <div class="container">
      <div class="swiper-container-text">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            {!!$category->description!!}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection