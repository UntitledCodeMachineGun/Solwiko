    <div class="product">
        <div class="product-img">
            <a href="{{route('news',[$item->code])}}"><img
                    src="{{Storage::url($item->image)}}"
                    alt="just a holder"></a>
        </div>
        <div class="card-bottom">
            <a href="{{route('news',[$item->code])}}" class="product-title">{{$item->name}}</a>
            <p class="product-description">{{$item->description}}</p>
            <a href="{{route('news',[$item->code])}}" class="to-cart-btn">Подробнее</a>
        </div>
    </div>
