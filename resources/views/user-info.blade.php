@extends('layouts.master')
@section('title', 'Личный кабинет')
@section('content')

    <section class="user-info">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#profile">Профиль</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#orders">Заказы</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active container" id="profile">
                    <div class="user-info-container">
                        <div class="right-container">
                            <div class="contact-info">
                                <h3>Контакнтные данные</h3>
                                <p>Номер телефона: <br><span class="phone">232321313</span> <button type="button"
                                        class="edit" onclick="openForm()"><i class="fas fa-pencil-alt"></i></button></p>
                                <div id="form-container-phone">
                                    <form action="" method="POST" id="change-phone">
                                        <span>Новый номер телефона</span>
                                        <input type="tel">
                                        <div class="buttons">
                                            <button type="button" onclick="closeForm()">Отмена</button>
                                            <button type="submit">Применить</button>
                                        </div>
                                    </form>
                                </div>
                                <p>Email: <br><span class="email">Email@ewe</span> <button type="button"
                                        onclick="openAddForm()"><i class="fas fa-pencil-alt"></i></button></p>
                                <div id="form-container-email">
                                    <form action="" method="POST" id="change-phone">
                                        <span>Новый Email</span>
                                        <input type="tel">
                                        <div class="buttons">
                                            <button type="button" onclick="closeAddForm()">Отмена</button>
                                            <button type="submit">Применить</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="about-bonus">
                                    <p class="primary">На счету <span>23</span> <span>бонуса</span></p>
                                    <p class="secondary">1 бонус равен 1 гривне</p>
                                </div>
                            </div>
                        </div>
                        <div class="change-password">
                            <h3>Смена пароля</h3>
                            <label for="oldpass">Введите старый пароль</label>
                            <input type="password" required id="oldpass">
                            <label for="newpass">Введите новый пароль</label>
                            <input type="password" required id="newpass">
                            <label for="renewpass">Подтвредите новый пароль</label>
                            <input type="password" required id="renewpass">
                            <button type="submit">Применить</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  container" id="orders">
                    <div class="order-info-container">
                        <h3>Ваши заказы</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Номер</th>
                                    <th scope="col">Название товара</th>
                                    <th scope="col">Количество</th>
                                    <th scope="col">Цена</th>
                                    <th scope="col">Дата</th>
                                    <th scope="col">Статус</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td aria-label="Номер">1</td>
                                    <td aria-label="Название товара"><a href="">Mark</a></td>
                                    <td aria-label="Количество">2</td>
                                    <td aria-label="Цена">4</td>
                                    <td aria-label="Дата">@mdo</td>
                                    <td aria-label="Статус">@mdo</td>
                                </tr>
                                <tr>
                                    <td aria-label="Номер">1</td>
                                    <td aria-label="Название товара"><a href="">Mark</a></td>
                                    <td aria-label="Количество">2</td>
                                    <td aria-label="Цена">4</td>
                                    <td aria-label="Дата">@mdo</td>
                                    <td aria-label="Статус">@mdo</td>
                                </tr>
                                <tr>
                                    <td aria-label="Номер">1</td>
                                    <td aria-label="Название товара"><a href="">Mark</a></td>
                                    <td aria-label="Количество">2</td>
                                    <td aria-label="Цена">4</td>
                                    <td aria-label="Дата">@mdo</td>
                                    <td aria-label="Статус">@mdo</td>
                                </tr>
                                <tr>
                                    <td aria-label="Номер">1</td>
                                    <td aria-label="Название товара"><a href="">Mark</a></td>
                                    <td aria-label="Количество">2</td>
                                    <td aria-label="Цена">4</td>
                                    <td aria-label="Дата">@mdo</td>
                                    <td aria-label="Статус">@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection