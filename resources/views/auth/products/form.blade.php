@extends('layouts.app')

@isset($product)
    @section('title', 'Редактировать товар ' . $product->name)
@else
    @section('title', 'Создать товар')
@endisset

@section('content')
    <div class="container">
        @isset($product)
            <h1>Редактировать товар <b>{{ $product->name }}</b></h1>
        @else
            <h1>Добавить товар</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input  type="text" class="form-control" name="code" id="code"
                               value="{{ old('code', isset($product) ? $product->code : null) }}">
                    </div>
                    @include('layouts.error', ['fieldName' => 'code'])
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input  type="text" class="form-control" name="name" id="name"
                               value="{{ old('name', isset($product) ? $product->name : null) }}">
                    </div>
                    @include('layouts.error', ['fieldName' => 'name'])
                </div>
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        <select  name="category_id" id="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    @isset($product)
                                        @if ($product->category_id == $category->id)
                                            selected
                                        @endif
                                    @endisset>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
								<textarea name="description" id="description" cols="72"
                                          rows="7">{{ old('description', isset($product) ? $product->description : null) }}</textarea>
                    </div>
                    @include('layouts.error', ['fieldName' => 'description'])
                </div>
                <div class="input-group row">
                    <label for="features" class="col-sm-2 col-form-label">Характеристики: </label>
                    <div class="col-sm-6">
								<textarea name="features" id="description" cols="72"
                                          rows="7">{{ old('features', isset($product) ? $product->features : null) }}</textarea>
                    </div>
                    @include('layouts.error', ['fieldName' => 'features'])
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                    @include('layouts.error', ['fieldName' => 'image'])
                </div>
                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                    <div class="col-sm-2">
                        <input  type="text" class="form-control" name="price" id="price"
                               value="{{ old('price', isset($product) ? $product->price : null) }}">
                    </div>
                    @include('layouts.error', ['fieldName' => 'price'])
                </div>
                <div class="input-group row">
                    <label for="count" class="col-sm-2 col-form-label">Кол-во: </label>
                    <div class="col-sm-2">
                        @include('layouts.error', ['fieldName' => 'count'])
                        <input type="text" class="form-control" name="count" id="count"
                               value="@isset($product){{ $product->count }}@endisset">
                    </div>
                </div>
                <br>
                @foreach ([
                    'hit' => 'Хит',
                    'new' => 'Новинка',
                    'recommend' => 'Рекомендуемые',
                ] as $field => $title)
                    <div class="input-group row">
                        <label for="{{$field}}" class="col-sm-2 col-form-label">{{$title}}: </label>
                        <div class="col-sm-6">
                            <input  type="checkbox" name="{{$field}}" id="{{$field}}"
                                   @if(isset($product) && $product->$field === 1)
                                    checked
                                   @endif
                            >
                        </div>
                    </div>
                    <br>
                @endforeach
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection