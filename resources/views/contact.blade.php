@extends('layouts.master')
@section('title', 'Контакты')

@section('content')

    <section class="contacts">
        <div class="container">
            <h2>Контакты</h2>
            <span>Свяжитесь с нами</span>
            <a href="tel:+380994443390">+380 (99) 444-33-90</a>
            <p>Email:<a href="mailto:dev.v.nazarenko@gmail.com"> dev.v.nazarenko@gmail.com</a></p>
            <a href="https://instagram.com/solwiko?igshid=1enj8b4oxttp1">Мы в Instagram <i
                    class="fab fa-instagram"></i></a>

            <div class="form">
                <form action="" method="POST">
                    <h3>Отправьте нам сообещение</h3>
                    <label for="form-email">Ваш Email</label>
                    <input type="email" id="form-email">
                    <label for="form-message">Ваше сообещение</label>
                    <textarea name="message" id="form-message" cols="30" rows="10"></textarea>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </section>

@endsection