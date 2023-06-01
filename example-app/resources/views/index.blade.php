<!doctype html>

<html>

<head>
    <title>
        Tachki
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}} ">
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
                <div class="category-button" id="header-button">
                    <span>Категорії</span>
                </div>
                <div id="mobile-header-icons">
                    <img src="src/search.png" alt="">
                    <img src="src/icon-burger.png" alt="">
                </div>
            </div>
        </div>
    </header>

    <div class="container" id="about-container">
        <div id="about-text">
            <h1>
                URBAN RACERS
            </h1>
            <p>
                Інтернет-магазин тюнінгових комплектуючих для сучасних автомобілів Audi, Skoda, Seat, Skoda, Porsche, BMW, Mercedes-Benz та ін. Ми пропонуємо тільки найкращі продукти з Європи та США. Ми працюємо безпосередньо із заводами, гарантуючи тим самим відмінні ціни та терміни доставки.
            </p>
            <div class="category-button" id="about-category-button">
                <span>Категорії</span>
            </div>
        </div>
        <div id="about-photo"> 
            <div id="photo-conntainer">
                <img src="src/bg.png" alt="">
                <div id="about-photo-text">
                    <div>Знижки на підвіску BC Racing</div>
                    <div id="about-logo">
                        <img src="src/about-logo.png" alt="">
                        <h2>
                            до 60%
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="selection-container">
        <div id="selection">
            <div id="about-selection" class="about">
                <h2>
                    Підбір по автомобілю
                </h2>
                <p>
                    Шукайте продукцію безпосередньо для свого автомобіля, вона зможе значно звузити асортимент та прискорити вибір товару.
                </p>
            </div>
            <div id="selection-drop-lists">
                <form action="#" >
                    <select name="languages" class="drop-list">
                        <option value="select">Виберіть марку автомобіля</option>
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
                <div class="category-button">
                <span>Категорії</span>
            </div>
        </div>

    </div>

    <div class="container" id="category-container">
        
        <div id="about-category" class="about">
            <h2>
                Категорії товарів
            </h2>
            <p>
                Виберіть категорію, яка вас цікавить. Є все, від HBC до футболки з логотипом BMW
            </p>
        </div>

        <div id="categories">
            <div class="category-card">
                <img src="src/categotyImgs/1.png" alt="">
                <span>Турбіні та турбокомплекти</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/2.png" alt="">
                <span>Гальма</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/3.png" alt="">
                <span>Охолодження</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/4.png" alt="">
                <span>Підвіска</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/5.png" alt="">
                <span>Подарунки</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/6.png" alt="">
                <span>Двигун</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/7.png" alt="">
                <span>Трансмісія</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/8.png" alt="">
                <span>Паливні системи</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/9.png" alt="">
                <span>Інтер'єр і Екстер'єр</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/10.png" alt="">
                <span>Випускні системи</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/11.png" alt="">
                <span>Впускні системи</span>
            </div>
            <div class="category-card">
                <img src="src/categotyImgs/12.png" alt="">
                <span>Шини та диски</span>
            </div>
        </div>
    </div>

    <div class="container" id="hot-container">
        <h1>
            Актуальне
        </h1>

        <div id="news-cards">
            <div class="news-card">
                <img src="src/cars/1.png" alt="">
                <h4>
                    Автоогляд №5
                </h4>
                <span>
                    Все що ви хотіли дізнатися про BMW.
                </span>
            </div>
            <div class="news-card">
                <img src="src/cars/2.png" alt="">
                <h4>
                    Автоогляд №5
                </h4>
                <span>
                    Все що ви хотіли дізнатися про BMW.
                </span>
            </div>
            <div class="news-card">
                <img src="src/cars/3.png" alt="">
                <h4>
                    Автоогляд №5
                </h4>
                <span>
                    Все що ви хотіли дізнатися про BMW.
                </span>
            </div>
            <div class="news-card">
                <img src="src/cars/4.png" alt="">
                <h4>
                    Автоогляд №5
                </h4>
                <span>
                    Все що ви хотіли дізнатися про BMW.
                </span>
            </div>
            <div class="news-card">
                <img src="src/cars/5.png" alt="">
                <h4>
                    Автоогляд №5
                </h4>
                <span>
                    Все що ви хотіли дізнатися про BMW.
                </span>
            </div>
        </div>
    </div>

    <div class="container" id="qa-container">
        <div id="qa">
            <h2 id="qa-title">
                Ми готові відповісти на всі ваші запитання!
            </h2>
            <div id="qa-inputs">
                <div class="qa-input" id="email-input">
                    <form>
                        <div>
                            Email
                        </div>
                        <input type = "email"  name = "firstname">
                    </form>
                </div>
                <div class="qa-input" id="phone-number-input">
                    <form>
                        <div>
                            Телефон
                        </div>
                        <input type = "tel"  name = "firstname">
                    </form>
                </div>
            </div>
            <div id="qa-button">
                <span>Задати питання</span>
            </div>
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