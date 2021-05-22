@extends('layouts.app')

@section('title', 'Продукт ' . $product->name)

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <td>Характеристики</td>
                <td>{{ $product->features }}</td>
            </tr>
            <tr>
                <td>Цена</td>
                <td>{{ $product->price }} грн.</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{Storage::url($product->image)}}" height="240px"></td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>Лейблы</td>
                <td>
                    @if ($product->isNew())
                    <span class="badge">Новинка</span>
                    @endif
                    @if ($product->isRecommend())
                    <span class="badge badge-warning">Рекомендуем</span>
                    @endif
                    @if ($product->isHit())
                    <span class="badge badge-danger">Хит</span>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection