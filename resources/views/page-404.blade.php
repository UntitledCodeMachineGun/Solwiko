@extends('layouts.master')
@section('title', 'Ошибка, страница не найдена')

@section('content')
<section class="page-404">
    <div class="container">
        <h1>Nothing interesting here</h1>
        <a href="{{ route('home') }}"><h2>go back</h2></a>
    </div>
</section>


@endsection