@extends('layouts.app')

@section('title', 'Новости')

@section('content')
    <div class="container">
        <h1>Новости</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Код
                    </th>
                    <th>
                        Название
                    </th>
                    <th>
                        Действия
                    </th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($news as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('news.destroy', $item) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('news.show', $item) }}">Открыть</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('news.edit', $item) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        {{$news->links()}}
        <br>
        <a class="btn btn-success" type="button" href="{{ route('news.create') }}">Добавить новость</a>
    </div>
@endsection