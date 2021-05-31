<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/fonts/font.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>@yield('title') | Solwiko</title>
</head>

<body>
    <div class="wrapper">
        {{-- <button class="profile" data-toggle="modal" data-target="#registration">Регистрация</button>
        <button class="profile" data-toggle="modal" data-target="#subcr">Подпискка</button>
        <button class="profile" data-toggle="modal" data-target="#pass-renew">Восстановить пароль</button> --}}
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand @routeactive('index')" href="{{route('index')}}">
                        <img src="/img/logo.png" alt="Logo" width="70px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ассортимент
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($categories as $cat)
                                    <li><a class="dropdown-item" href="/{{$cat->code}}">{{$cat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @routeactive('info')" href="/info">Доставка</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @routeactive('info')" href="/info">Оплата</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @routeactive('info')" href="/info">О нас</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @routeactive('contact')" href="/contact">Контакты</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @routeactive('news')" href="/blog">Блог</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('index') }}" method="get" class="search">
                                    <div class="input-group rounded">
                                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                        aria-describedby="search-addon" name="search" value="{{ request('search') }}"/>
                                        <span class="s-addon" id="search-addon">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>

                    </div>
                    <div class="rgiht-part-menu d-flex">
                        <div class="menu-contact">
                            <a id="phone" href="tel:+380994443390">
                                <i class="fas fa-phone    "></i>
                                <span>+380 (99) 444-33-90</span>
                            </a>
                        </div>
                        <div class="menu-user">
                            @guest
                            <button class="profile" onclick="document.location ='{{route('login')}}'">  <!--data-toggle="modal" data-target="#login"-->
                                <i class="far fa-user"></i>
                            </button>
                            @endguest
                            @auth
                            @admin
                            <button class="profile" onclick="document.location ='{{route('home')}}'">  <!--data-toggle="modal" data-target="#login"-->
                                <i class="far fa-user"></i>
                            </button>
                            @else
                            <button class="profile" onclick="document.location ='{{route('person.orders.index')}}'">  <!--data-toggle="modal" data-target="#login"-->
                                <i class="far fa-user"></i>
                            </button>
                            @endadmin
                           
                            @endauth
                            <button class="cart" onclick="document.location='/cart'">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif
        
    @yield('content')

    <footer>
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer-left">
                    <div class="phone">
                        <div class="phone-item">
                            <span>Свяжитесь с нами</span>
                            <a href="tel:+380994443390">+380 (99) 444-33-90</a>
                        </div>
                        <div class="email">
                            <p>Email:<a href="mailto:dev.v.nazarenko@gmail.com"> dev.v.nazarenko@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="footer-center">
                    <div class="social">
                        <a href="https://instagram.com/solwiko?igshid=1enj8b4oxttp1">Мы в Instagram <i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-right">
                    <div class="user">
                        <i class="far fa-user"></i> <a href=""><span> Войти</span></a> |<a href=""><span>
                                Регистрация</span></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <span>@2021. Solwiko</span>
                <a href="">Условия и соглашения</a>
                <a href="">Политика конфиденциальности</a>
                <div class="support">
                    <span>Техподдержка <a href="mailto:dev.v.nazarenko@gmail.com">dev.v.nazarenko@gmail.com</a></span>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.navbar-toggler').click(function(event) {
                $('.navbar-toggler, .navbar-collapse').toggleClass('active');
                $('body').toggleClass('fixed-page');
            });
        });

    </script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },
            navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

        });
    </script>

    <script>
        if (innerWidth <= 769) {
            var menuSwiper = new Swiper('.swiper-container-menu', {
                slidesPerView: 3,
                spaceBetween: 50,
                freeMode: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        } else {
            var menuSwiper = new Swiper('.swiper-container-menu', {
                slidesPerView: 5,
                spaceBetween: 20,
                freeMode: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }

    </script>
    <script>
        if (innerWidth <= 769) {
            var newsSwiper = new Swiper('.swiper-container-news', {
                slidesPerView: 2,
                spaceBetween: 8,
                freeMode: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        } else if (innerWidth == 1024) {
            var newsSwiper = new Swiper('.swiper-container-news', {
                slidesPerView: 3,
                spaceBetween: 5,
                freeMode: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        } else {
            var newsSwiper = new Swiper('.swiper-container-news', {
                slidesPerView: 4,
                spaceBetween: 5,
                freeMode: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }

    </script>
    <script>
        var textswiper = new Swiper('.swiper-container-text', {
            direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            mousewheel: true,
        });

    </script>
    <script>
        function openForm() {
            document.getElementById("answer").style.display = "block";
        }

        function closeForm() {
            document.getElementById("answer").style.display = "none";
        }

        function openAddForm() {
            document.getElementById("add-review").style.display = "block";
        }

        function closeAddForm() {
            document.getElementById("add-review").style.display = "none";
        }

    </script>
    <script>
        if (innerWidth <= 768) {
            var newsSwiper = new Swiper('.swiper-container-add-p', {
                slidesPerView: 2,
                spaceBetween: 8,
                freeMode: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        } else if (innerWidth == 1024) {
            var newsSwiper = new Swiper('.swiper-container-add-p', {
                slidesPerView: 3,
                spaceBetween: 5,
                freeMode: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        } else {
            var newsSwiper = new Swiper('.swiper-container-add-p', {
                slidesPerView: 4,
                spaceBetween: 5,
                freeMode: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }

    </script>
    <script>
        $(function() {

            var valueElement = $('#value');

            function incrementValue(e) {
                valueElement.text(Math.max(parseInt(valueElement.text()) + e.data.increment, 1));
                return false;
            }

            $('#plus').bind('click', {
                increment: 1
            }, incrementValue);

            $('#minus').bind('click', {
                increment: -1
            }, incrementValue);

        });

    </script>
        <script>
            function openForm() {
                document.getElementById("form-container-phone").style.display = "block";
            }
    
            function closeForm() {
                document.getElementById("form-container-phone").style.display = "none";
            }
    
            function openAddForm() {
                document.getElementById("form-container-email").style.display = "block";
            }
    
            function closeAddForm() {
                document.getElementById("form-container-email").style.display = "none";
            }
    
        </script>



    


</body>

</html>

{{-- <!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="top-modal">
                    <i class="fas fa-sign-in-alt"></i>
                    <div class="modal-title">Вход в личный кабинет</div>
                </div>
                <form class="modal-form" action="" method="post">
                    <div class="log">
                        <input class="email" name="" type="mail" placeholder="Электронная почта">
                    </div>
                    <div class="log">
                        <input class="password" name="" type="password" placeholder="Пароль">
                    </div>
                    <div class="error-message">
                        Неверный адрес электронной почты или пароль
                    </div>
                    <div class="pass-forgot">Забыли пароль?</div>
                    <button class="login-btn">Войти</button>
                </form>
                <div class="modal-reg-quer">Нет аккаунта? <button data-toggle="modal" data-target="#registration">Зарегистрироваться</button></div>
            </div>
        </div>
    </div>
</div>

<!--registration-->

<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="top-modal">
                    <i class="fas fa-user-plus"></i>
                    <div class="modal-title">Регистрация</div>
                </div>
                <form class="modal-form" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="log">
                        <input class="email" type="mail" placeholder="Электронная почта" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    <div class="log">
                        <input class="password" name="" type="password" placeholder="Пароль (минимум 6 символов)" name="password" required autocomplete="new-password">
                    </div>
                    <div class="log">
                        <input class="password" name="" type="password" placeholder="Подтвердите пароль" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="error-message">
                        Пользователь с такой электронной почтой уже зарегистрирован
                    </div>

                    <div class="radio-block">
                        <div class="line">
                            <input type="checkbox" id="r-mail">
                            <label for="r-mail">Хочу рассылку</label>
                        </div>
                        <div class="line">
                            <input type="checkbox" id="r-politic">
                            <label for="r-politic">Принимаю условия <a href="">Пользовательского соглашения</a>, <a
                                    href="">Политики конфиденциальности</a></label>
                        </div>
                    </div>

                    <button class="login-btn">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Subscribe -->
<div class="modal fade" id="subcr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="top-modal">
                    <i class="far fa-envelope"></i>
                    <div class="modal-title">Подпишитесь на нашу рассылку</div>
                </div>
                <form class="modal-form" action="" method="post">
                    <div class="log">
                        <input class="email" name="" type="email" placeholder="Email">
                    </div>

                    <div class="error-message">
                        Электронная почта указана неверно
                    </div>

                    <button class="login-btn">Подписаться</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Pass renew -->
<div class="modal fade" id="pass-renew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="top-modal">
                    <i class="fas fa-key"></i>
                    <div class="modal-title">Восстановление пароля</div>
                </div>
                <form class="modal-form" action="" method="post">
                    <div class="log">
                        <input class="email" name="" type="mail" placeholder="Электроння почта">
                    </div>
                    <div class="log">
                        <input class="password" name="" type="password" placeholder="Пароль (минимум 6 символов)">
                    </div>
                    <div class="log">
                        <input class="password" name="" type="password" placeholder="Подтвердите пароль">
                    </div>

                    <div class="error-message">
                        Неверный адрес электронной почты или пароль
                    </div>

                    <div class="buttons">
                        <button class="decline" data-dismiss="modal" aria-label="Close">Отмена</button>
                        <button class="renew-btn">Обновить пароль</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div> --}}

