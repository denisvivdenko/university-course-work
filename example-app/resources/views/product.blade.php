<!doctype html>

<html>

<head>
    <title>
        Tachki
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
</head>

<body>
    <header>
        <div class="container" id="upper-header-container">
            <div id="upper-header">
                <div id="upper-header-left">
                    <span>
                        Область: Київ
                    </span>
                    <img src="{{asset('src/arrow down.png')}}" alt="">
                </div>

                <div id="upper-header-right">
                    <div id="contact-phone">
                        <img src="{{asset('src/phone.png')}}" alt="">
                        <span>
                            +380981234567
                        </span>
                    </div>

                    <div id="user-profile">
                        <img src="{{asset('src/user.png')}}" alt="">
                        <span>
                            Вівденко Денис
                        </span>
                        <img src="{{asset('src/arrow down.png')}}" alt="">

                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="bottom-header-container">
            <div id="bottom-header">
                <div id="header-logo-nav">
                    <div class="header-logo">
                        <img src="{{asset('src/logo.png')}}" alt="">
                        <span>
                            Магазин <br>
                            Автотюнінг
                        </span>
                    </div>
                    <div id="navigation-bar">
                        <a href="/">
                            <nav>
                                головна
                            </nav>
                        </a>
                        <a href="/catalog">
                            <nav>
                                каталог
                            </nav>
                        </a>
                        <a href="">
                            <nav>
                                Інформація
                            </nav>
                        </a>
                        <a href="">
                            <nav>
                                контакти
                            </nav>
                        </a>
                        <a href="">
                            <nav>
                                Додаткове
                            </nav>
                        </a>
                    </div>
                </div>
                <div class="category-button">
                    <span>Категорії</span>
                </div>
            </div>
        </div>
    </header>

    <div class="container" id="product-container">
        <div id="product-left">
            <img src="{{asset($product->product_image)}}" alt="">
            <h1>
                Комплект гвинтової підвіски BC Racing серія BR тип RA
            </h1>
            <div id="purchase">
                <div id="purchase-price">
                    <h3>
                        Ціна:
                    </h3>
                    <h3 style="color: #F05454;">
						${{$product->product_price}}
                    </h3>
                </div>

                <div class="purchase-imgs">
                    <img src="{{asset('src/favorite.png')}}" alt="">
                </div>

                <div class="purchase-imgs">
                    <img src="{{asset('src/compare.png')}}" alt="">
                </div>
            </div>
            <div class="category-button">
                <span>Замовити</span>
            </div>
            <div id="suits-to">
                <h1>
                    Підходить для
                </h1>

                <div id="suits-to-items">
					@foreach($product->suitsto as $item)
                    <div class="suits-to-item">
                        <div class="suits-to-item-left">
                            <img src="{{asset($item->model_logo)}}" alt="">
                            <span>{{$item->model_name}}</span>
                        </div>

                        <div class="suits-to-item-right">
                            <span>
                                2 моделі
                            </span>
                            <img src="src/cross.png" alt="">
                        </div>
                    </div>
					@endforeach
                </div>
            </div>
        </div>

        <div id="product-right">
            <div id="product-descr">
                <h1>
                    Опис
                </h1>
                <span>
					{{$product->product_description}}
                </span>
            </div>

            <div id="product-characteristics">
                <div id="product-characteristics-buttons">
                    <div id="product-characteristics-options">
                        <div id="option-active">
                            <span>
                                Характеристики
                            </span>
                        </div>
            
                        <div class="option-inactive">
                            <span>
                                Аналоги
                            </span>
                        </div>
                        <div class="option-inactive">
                            <span>
                                Відгуки
                            </span>
                        </div>
                    </div>
                </div>

                <div id="product-characteristics-text">
                    <h2>
                        Характеристики
                    </h2>
                    <p>
					{{$product->product_characteristics}}</p>
                </div>
            </div>

        </div>


    </div>

    <footer>
        <div class="container" id="footer-container">
            <div id="footer-upper">
                <div class="footer-col" id="footer-left">
                    <div class="header-logo">
                        <img src="{{asset('src/logo.png')}}" alt="">
                        <span>
                            Магазин <br>
                            Автотюнінг
                        </span>
                    </div>
                    <div id="footer-socials">
                        <img src="{{asset('src/footerSocials/inst.png')}}" alt="">
                        <img src="{{asset('src/footerSocials/tg.png')}}" alt="">
                        <img src="{{asset('src/footerSocials/youtube.png')}}" alt="">
                    </div>
                    <span>
                        Інтернет-магазин тюнінг-комплектуючих для сучасних автомобілів Audi, Skoda, Seat, Skoda, Porsche, BMW, Mercedes-Benz та ін. Ми пропонуємо тільки найкращі товари з Європи та США. Працюємо безпосередньо із заводами, тим самим гарантуючи відмінні ціни та терміни доставки.
                    </span>
                </div>
                <div class="footer-col" id="footer-nav">
                    <h4>
                        Сторінки
                    </h4>
                    <span>
                        Головна
                    </span>
                    <span>
                        Контакти
                    </span>
                    <span>
                        Каталог
                    </span>
                    <span>
                        Партнери
                    </span>
                    <span>
                        Актуальне
                    </span>
                    <span>
                        Підбір по автомобілю
                    </span>
                </div>
                <div class="footer-col footer-col-nomobile">
                    <h4>
                        Для покупців
                    </h4>
                    <span>
                        Доставка
                    </span>
                    <span>
                        Оплата
                    </span>
                    <span>
                        Повернення
                    </span>
                    <span>
                        Партнери
                    </span>
                    <span>
                        Особистий кабінет
                    </span>
                </div>
                <div class="footer-col footer-col-nomobile">
                    <h4>
                        Інформація
                    </h4>
                    <span>
                        Статті
                    </span>
                    <span>
                        Відеоогляди
                    </span>
                    <span>
                        Бренди
                    </span>
                    <span>
                        Установчі центри
                    </span>
                </div>
                <div class="footer-col footer-col-nomobile">
                    <h4>
                        Правила
                    </h4>
                    <span>
                        Кукі
                    </span>
                    <span>
                        Правила
                    </span>
                </div>
            </div>

            <div id="footer-bottom">
                <div id="footer-sign">
                    <h3>
                        Вхід
                    </h3>
                    <h3>
                        Реєстрація
                    </h3>
                </div>
                <span>
                    © 2022 UrbanRacers
                </span>
            </div>
        </div>
    </footer>
</body>

</html>