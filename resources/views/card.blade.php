<div class="product">
    <div class="product-img">
      <a href="{{route('product', [$product->category->code, $product->code])}}"><img src="{{Storage::url($product->image)}}" alt="just a holder"></a>
    </div>
    <a href="{{route('product', [$product->category->code, $product->code])}}" class="product-title">{{$product->name}}</a>
    <div class="price">
      <b>{{$product->price}} грн.</b>
    </div>
    <form action="{{route('cart-add', $product)}}" method="POST">
      <button type="submit" class="to-cart-btn">В корзину</button>
      <a href="{{route('product', [$product->category->code, $product->code])}}" class="to-cart-btn">Подробнее</a>
      @csrf
    </form>
  </div>