@extends('layouts.app')

@section('title', 'Заказ ' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ №{{ $order->id }}</h1>
                    <p>Заказчик: <b>{{ $order->surname }} {{ $order->name }} {{ $order->fathname }}</b></p>
                    <p>Номер телфона: <b>{{ $order->phone }}</b></p>
                    <p>Город: <b>{{ $order->city }}</b></p>
                    <p>№Отделения: <b>{{ $order->post_num }}</b></p>
                    <p>Доп. информация: <b>{{ $order->add_info }}</b></p>
                    <p>Время создания: <b>{{ $order->created_at }}</b></p>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Стоимость</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($order->products as $product)
                            <tr>
                                <td>
                                    <a href="">
                                        <img height="56px"
                                             src="{{ Storage::url($product->image) }}">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td></td>
                                <td>{{ $product->price }} грн.</td>
                                <td>{{ $product->getPrice()}} грн.</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>{{ $order->getFullPrice() }} грн.</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection