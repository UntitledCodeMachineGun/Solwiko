@extends('layouts.master')
@section('title', 'Корзина')
@section('content')

    <section class="cart-block">
        <div class="container">
            <div class="order-info-container">
                <h3>Ваш заказ</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Номер</th>
                            <th>Название товара</th>
                            <th>Количество</th>
                            <th>Цена</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($order->products()->with('category')->get() as $product)
                        <tr>
                            <td scope="row" aria-label="Номер">{{$i++}}</td>
                            <td aria-label="Название товара"><a href="{{route('product', [$product->category->code, $product->code])}}">{{$product->name}}</a></td>
                            <td aria-label="Количество">                              
                                <div class="input-group">
                                    <form action="{{route('cart-remove', $product)}}" method="POST">
                                        <button type="submit" class="button-minus" data-field="quantity">-</button>
                                        @csrf
                                    </form>
                                    <form action="">
                                        <input type="number" disabled step="1" max="" value="{{$product->pivot->count}}" name="quantity" class="quantity-field">
                                    </form>
                                    <form action="{{route('cart-add', $product)}}" method="POST">
                                        <button type="submit" class="button-plus" data-field="quantity">+</button>
                                        @csrf
                                    </form>
                                </div>
                            </td>
                            <td aria-label="Цена">{{$product->getPrice()}} грн.</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>



                <div class="cart-bottom">
                    <p>Итого: <span class="summary">{{$order->getFullPrice()}}</span> грн. <br><span class="delivery">Со стоимостью доставки
                            (50 грн.)</span></p>

                    <a class="submit-order-btn" type="button" href="{{route('submit-order')}}">Оформить заказ</a>
                </div>

            </div>
        </div>
    </section>
    <script>
        function incrementValue(e) {
      e.preventDefault();
      var fieldName = $(e.target).data('field');
      var parent = $(e.target).closest('div');
      var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
    
      if (!isNaN(currentVal)) {
        parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
      } else {
        parent.find('input[name=' + fieldName + ']').val(0);
      }
    }
    
    function decrementValue(e) {
      e.preventDefault();
      var fieldName = $(e.target).data('field');
      var parent = $(e.target).closest('div');
      var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
    
      if (!isNaN(currentVal) && currentVal > 0) {
        parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
      } else {
        parent.find('input[name=' + fieldName + ']').val(0);
      }
    }
    
    $('.input-group').on('click', '.button-plus', function(e) {
      incrementValue(e);
    });
    
    $('.input-group').on('click', '.button-minus', function(e) {
      decrementValue(e);
    });
    
    </script>
@endsection