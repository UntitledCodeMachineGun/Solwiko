<div class="product">
  <div class="labels">
    @if ($product->isNew())
      <span class="badge badge-success">Новинка</span>
    @endif
    @if ($product->isRecommend())
      <span class="badge badge-warning">Рекомендуем</span>
    @endif
    @if ($product->isHit())
      <span class="badge badge-danger">Хит</span>
    @endif
  </div>
    <div class="product-img">
      <a href="{{route('product', [$product->category->code, $product->code])}}"><img src="{{Storage::url($product->image)}}" alt="just a holder"></a>
    </div>
    <a href="{{route('product', [$product->category->code, $product->code])}}" class="product-title">{{$product->name}}</a>
    <div class="price">
      <b>{{$product->price}} грн.</b>
    </div>
    <form action="{{route('cart-add', $product)}}" method="POST">

         @if($product->isAvailable())
                    <button type="submit" class="to-cart-btn" role="button">В корзину</button>
                @else
                    <span class="to-cart-btn">Недоступен</span>
                @endif
                <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}"
                   class="to-cart-btn" role="button">Подробнее</a>
      @csrf
    </form>
  </div>