<!doctype html>

<html>

<head>
    <title>
        Tachki
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/catalog.css')}}">
</head>

<body>
    <header>
        <div class="container" id="upper-header-container">
            <div id="upper-header">
                <div id="upper-header-left">
                    <span>
                        Область: Київ
                    </span>
                    <img src="src/arrow down.png" alt="">
                </div>

                <div id="upper-header-right">
                    <div id="contact-phone">
                        <img src="src/phone.png" alt="">
                        <span>
                            +380981234567
                        </span>
                    </div>

                    <div id="user-profile">
                        <img src="src/user.png" alt="">
                        <span>
                            Вівденко Денис
                        </span>
                        <img src="src/arrow down.png" alt="">

                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="bottom-header-container">
            <div id="bottom-header">
                <div id="header-logo-nav">
                    <div class="header-logo">
                        <img src="src/logo.png" alt="">
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

    <div class="container" id="catalog-container">
        <div id="catalog-title">
            <h1>
                Каталог запчастин для VW Tiguan 1
            </h1>

            <h3 id="mobile-filter-button">
                Фільтри
            </h3>
        </div>

        <div id="catalog-content">
            <div id="catalog-filters">
                <h3>
                    Фільтр
                </h3>
                <span>
                    Максимальне заниження
                </span>

                <div id="max-reduction">
                    <div class="reduction-option">
                            <span>
                                10 мм
                            </span>
                            <img src="src/cross.png" alt="">
                    </div>
                    <div class="reduction-option">
                            <span>
                                15 мм
                            </span>
                            <img src="src/cross.png" alt="">
                    </div>
                    <div class="reduction-option">
                            <span>
                                20 мм
                            </span>
                            <img src="src/cross.png" alt="">
                    </div>
                </div>

                <div id="car-pickup">
                    <span>
                        Підбір з авто
                    </span>
                    <form action="#" >
                        <select name="languages" class="drop-list">
                            <option value="select">Виберіть марку</option>
                            <option value="javascript">JavaScript</option>
                            <option value="php">PHP</option>
                            <option value="java">Java</option>
                            <option value="golang">Golang</option>
                            <option value="python">Python</option>
                            <option value="c#">C#</option>
                            <option value="C++">C++</option>
                            <option value="erlang">Erlang</option>
                        </select>
                    </form>
                    <form action="#" >
                        <select name="languages" class="drop-list">
                            <option value="select">Виберіть марку модель</option>
                            <option value="javascript">JavaScript</option>
                            <option value="php">PHP</option>
                            <option value="java">Java</option>
                            <option value="golang">Golang</option>
                            <option value="python">Python</option>
                            <option value="c#">C#</option>
                            <option value="C++">C++</option>
                            <option value="erlang">Erlang</option>
                        </select>
                    </form>
                    <form action="#" >
                        <select name="languages" class="drop-list">
                            <option value="select">Виберіть модифікацію</option>
                            <option value="javascript">JavaScript</option>
                            <option value="php">PHP</option>
                            <option value="java">Java</option>
                            <option value="golang">Golang</option>
                            <option value="python">Python</option>
                            <option value="c#">C#</option>
                            <option value="C++">C++</option>
                            <option value="erlang">Erlang</option>
                        </select>
                    </form>
                </div>
                <div id="new-or-used">
                    <div id="new">
                        <span>
                            Новий
                        </span>
                    </div>
        
                    <div id="used">
                        <span>
                            Вживаний
                        </span>
                    </div>
                </div>
            </div>
            <div id="catalog-items">
				@foreach($products as $product)
                <div class="catalog-item">
					<a href="/product/{{$product->id}}">
                    <img src="{{asset($product->product_image)}}" alt="" class="special-image">
					</a>
                    <h3>
                        {{$product->product_name}}
                    </h3>

                    <span>
                        Товар магазину Urban Racers
                    </span>

                    <div class="catalog-item-bottom">
                        <h3>
						$ {{$product->product_price}}
                        </h3>

                        <img src="src/shopping-cart.png" alt="">
                    </div>
                </div>
				@endforeach
            </div>
        </div>

        
    </div>

    <div class="container" id="hot-container">
        <h1 id="hot-container-title">
            Спеціальна пропозиція
        </h1>

        <div id="special-items">
		@foreach($products as $product)
                <div class="special-item">
					<a href="/product/{{$product->id}}" >
                    <img src="{{asset($product->product_image)}}" alt="" class="special-image">
					</a>
                    <h3>
                        {{$product->product_name}}
                    </h3>

                    <span>
                        Товар магазину Urban Racers
                    </span>

                    <div class="catalog-item-bottom">
                        <h3>
						$ {{$product->product_price}}
                        </h3>

                        <img src="src/shopping-cart.png" alt="">
                    </div>
                </div>
		@endforeach

        </div>
    </div>

    <footer>
        <div class="container" id="footer-container">
            <div id="footer-upper">
                <div class="footer-col" id="footer-left">
                    <div class="header-logo">
                        <img src="src/logo.png" alt="">
                        <span>
                            Магазин <br>
                            Автотюнінг
                        </span>
                    </div>
                    <div id="footer-socials">
                        <img src="src/footerSocials/inst.png" alt="">
                        <img src="src/footerSocials/tg.png" alt="">
                        <img src="src/footerSocials/youtube.png" alt="">
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