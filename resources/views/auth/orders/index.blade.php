@extends('layouts.app')

@section('title', 'Заказы')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>Заказы</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Отчество</th>
                        <th>Номер телефона</th>
                        <th>Город</th>
                        <th>№Отделения</th>
                        <th>Доп. информация</th>
                        <th>Время создания</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td scope="row" aria-label="ID">{{$order->id}}</td>
                        <td aria-label="Имя">{{$order->name}}</td>
                        <td aria-label="Фамилия">{{$order->surname}}</td>
                        <td aria-label="Отчество">{{$order->fathname}}</td>
                        <td aria-label="Номер телефона">{{$order->phone}}</td>
                        <td aria-label="Город">{{$order->city}}</td>
                        <td aria-label="№Отделения">{{$order->post_num}}</td>
                        <td aria-label="Доп. информация">{{$order->add_info}}</td>
                        <td aria-label="Время создания">{{$order->created_at->format('H:i d/m/y')}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a 
                                @admin
                                    href="{{route('orders.show', $order)}}"
                                @else
                                    href="{{route('person.orders.show', $order)}}"
                                @endadmin
                                type="button" class="btn btn-success">Подробнее</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
