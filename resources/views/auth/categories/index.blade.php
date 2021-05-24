@extends('layouts.app')

@section('title', 'Категории')

@section('content')
    <div class="container">
        <h1>Категории</h1>
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
            
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('categories.show', $category) }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('categories.edit', $category) }}">Редактировать</a>
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
        {{ $categories->links() }}
        <br>
        <a class="btn btn-success" type="button"
           href="{{ route('categories.create') }}">Добавить категорию</a>
    </div>
@endsection