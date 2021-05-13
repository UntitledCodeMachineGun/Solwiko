@extends('layouts.master')
@section('title', 'Подтверждение заказа')
@section('content')

    <section class="submit-order">
        <div class="container">
            <h3>Оформление заказа</h3>
            <form action="{{route('confirm-order')}}" method="POST" class="order-form">
                <div class="form-top">
                    <div class="form-left">
                        <label for="name">Имя</label>
                        <input required type="text" name="name" id="name">

                        <label for="surname">Фамилия</label>
                        <input required type="text" name="surname" id="surname">

                        <label for="fathersname">Отчество</label>
                        <input required type="text" name="fathersname" id="fathersname">

                        <label for="phone">Номер телефона</label>
                        <input required type="tel" name="phone" id="phone">
                    </div>



                    <div class="form-right">
                        <label for="city">Город</label>
                        <input required type="text" name="city" id="city">

                        <label for="post-stantion-number">Номер отделения Новой Почты</label>
                        <input required type="text" name="post_stantion_number" id="post-stantion-number">



                        <label for="add-message">Дополнительная информация</label>
                        <textarea name="add_message" id="add-message" cols="30" rows="10"></textarea>
                    </div>

                    <div class="pay">

                        {{-- <div class="bonuses-block">
                            <label for="use-bonuses">Использовать бонусы</label>
                            <input type="number" id="use-bonuses" min="0" value="0">

                            <div class="bonuses-bottom">
                                <p>У вас есть <span>23</span><span> бонуса</span></p>
                                <button type="button">Применить</button>
                            </div>
                        </div> --}}

                        <div class="pay-bottom">
                            <p>К оплате <span>{{$order->getFullPrice()}}</span> грн.</p>
                            <button type="submit">Подтвердить заказ</button>
                        </div>
                    </div>
                </div>


                @csrf
            </form>
        </div>
    </section>

@endsection