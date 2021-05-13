<div class="swiper-slide">
    <div class="product">
      <div class="product-img">
        <a href="{{route('product', [$product->category->code, $product->code])}}"><img src="{{Storage::url($product->image)}}" alt="just a holder"></a>
      </div>
      <div class="card-bottom">
        <a href="{{route('product', [$product->category->code, $product->code])}}" class="product-title">{{$product->name}}</a>
        <div class="price">
          <b>{{$product->price}} грн.</b>
          <a href="{{route('product', [$product->category->code, $product->code])}}" class="to-cart-btn">Подробнее</a>
        </div>
      </div>
    </div>
  </div>