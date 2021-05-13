@extends('layouts.app')

@section('title', 'Новость ' . $news->name)

@section('content')
    <div class="container">
        <h1>{{ $news->name }}</h1>
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
                <td>{{ $news->id}}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $news->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $news->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $news->description }}</td>
            </tr>
            <tr>
                <td>Текст новости</td>
                <td>{{ $news->text }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{Storage::url($news->image)}}" height="240px"></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection