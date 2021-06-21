@extends('layouts.master')
@section('title', 'Товар')
@section('content')

  <section class="home-menu product-card">
    <div class="container">
      <div class="swiper-container-menu">
        <div class="swiper-wrapper">
          @foreach ($categories as $cat)
          <a href="/{{$cat->code}}" class="swiper-slide">
            <span>{{$cat->name}}</span>
          </a>
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>

  </section>

  <section class="card-product">
    <div class="container">
      <div class="card-top">
        <div class="card-slider">
          <div class="swiper-container">
            <div class="swiper-wrapper">                  
              <div class="swiper-slide">
                <img src="{{ Storage::url($product->image) }}">
              </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        <div class="side-container">
          <div class="card-sidebar">
            <form action="{{route('cart-add', $product)}}" method="POST">
            <div class="title">
              <h3>{{ $product->name }}</h3>
            </div>
            <div class="reviews">
              <span>10</span> диванных экспертов оценили этот товар
            </div>
            <div class="price">
              <span>Цена за 1 шт.:</span><b>{{$product->price}} грн.</b>
            </div>
            {{-- <div class="price">
              <span>Сколько берем?</span>
              <div class="input">
                <a id="minus" href="#">-</a>
                <span id="value">1</span>
                <a id="plus" href="#">+</a>
              </div>
            </div>
            <div class="summary">
              <span>Итого:</span>
              <b>{{$product->getPrice()}} грн.</b>
            </div> --}}
            <div class="buy-block">
              
              @if($product->isAvailable())
              
              <button class="pay" type="submit"><i class="fas fa-shopping-cart    "></i> В корзину</button>
              @csrf
              
          @else
              Не доступен
          @endif
            </div>
          </form>

          </div>
          <div class="card-sidebar bottom">
            <div class="bonus-info">
              <span class="title">
                Закажите товаров на сумму и получите:
              </span>
              <div class="line">
                <i class="fas fa-coins"></i>
                <span>Какие-то бонусы на счет</span>
              </div>
              <div class="line">
                <i class="fas fa-truck"></i>
                <span>Бесплатную доставку</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-bottom">
        <div class="card-info">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#about">Описание</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#specs">Характеристики</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#reviews">Отзывы</a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane active container" id="about">
              <section class="home-text">
                <div class="container">
                  <div class="swiper-container-text">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        {{$product->description}}
                      </div>
                    </div>

                  </div>
                </div>
              </section>
            </div>
            <div class="tab-pane container" id="specs">
              {{$product->features}}
            </div>
            <div class="tab-pane container" id="reviews">
              <ul class="review-item">
                <li>Лена Головач</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos corporis, magnam doloremque labore quibusdam ipsam id, quis nam facilis provident totam atque beatae dignissimos, esse laboriosam non ducimus temporibus rem!</li>
                <li><button class="review-btn-answer" onclick="openForm()" type="button"><a href="#answer">Ответить</a></button></li>
                <hr>
              </ul>
              <ul class="review-item">
                <li>Никита 12 пошлый</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos corporis, magnam doloremque labore quibusdam ipsam id, quis nam facilis provident totam atque beatae dignissimos, esse laboriosam non ducimus temporibus rem!</li>
                <li><button class="review-btn-answer" onclick="openForm()" type="button"><a href="#answer">Ответить</a></button></li>
                <hr>
              </ul>
              <div class="add-comment">
                <button class="review-btn-add" onclick="openAddForm()" type="button"><a href="#add-review">Оставить отзыв</a></button>
              </div>
              <div id="answer">
                <div class="form" id="answer-form">
                  <h3>Ответ</h3>
                  <form action="" method="POST">
                    <label for="form-email">Ваше имя</label>
                    <input type="name" id="form-email" required>
                    <label for="form-message">Ваше сообещение</label>
                    <textarea name="message" id="form-message" cols="30" rows="10" required></textarea>
                    <div class="buttons">
                      <button type="submit">Отправить</button>
                      <button type="button" onclick="closeForm()">Закрыть</button>
                    </div>
                  </form>
                </div>
              </div>

              <div id="add-review">
                <div class="form" id="answer-form">
                  <h3>Ваш отзыв</h3>
                  <form action="" method="POST">
                    <label for="form-email">Ваше имя</label>
                    <input type="name" id="form-email" required>
                    <label for="form-message">Ваше сообещение</label>
                    <textarea name="message" id="form-message" cols="30" rows="10" required></textarea>
                    <div class="buttons">
                      <button type="submit">Отправить</button>
                      <button type="button" onclick="closeAddForm()">Закрыть</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="add-products">
    <div class="container">
      <h3>Ещё товары</h3>
      <div class="swiper-container-add-p">
        <div class="swiper-wrapper">

          @foreach ($product as $item)
            @include('slide-card', compact('item'))
          @endforeach

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

@endsection