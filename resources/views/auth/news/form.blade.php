@extends('layouts.app')

@isset($news)
    @section('title', 'Редактировать новость ' . $news->name)
@else
    @section('title', 'Создать новость')
@endisset

@section('content')
    <div class="container">
        @isset($news)
            <h1>Редактировать новость <b>{{ $news->name }}</b></h1>
        @else
            <h1>Добавить новость</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($news)
              action="{{ route('news.update', $news) }}"
              @else
              action="{{ route('news.store') }}"
            @endisset
        >
            <div>
                @isset($news)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input  type="text" class="form-control" name="code" id="code"
                               value="{{ old('code', isset($news) ? $news->code : null) }}">
                    </div>
                    @error('code')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input  type="text" class="form-control" name="name" id="name"
                               value="{{ old('name', isset($news) ? $news->name : null) }}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <br>
                <br>
                <div class="input-group row">
                    <label for="text" class="col-sm-2 col-form-label">Текст новости: </label>
                    <div class="col-sm-6">
								<textarea name="text" id="text" cols="72"
                                          rows="7">{{ old('text', isset($news) ? $news->text : null) }}</textarea>
                    </div>
                    @error('text')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Превью: </label>
                    <div class="col-sm-6">
								<textarea name="description" id="description" cols="72"
                                          rows="7">{{ old('description', isset($news) ? $news->description : null) }}</textarea>
                    </div>
                    @error('description')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                    @error('image')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <br>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection