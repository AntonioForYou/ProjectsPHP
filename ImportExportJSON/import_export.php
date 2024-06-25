<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COVID-19 - Клинико-диагностические лаборатории</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
<body>
<header class="head border-bottom border-dark sticky-top">
    <div class="container-fluid bg-dark">
        <nav class="navbar container justify-content-center flex-column">
            <div class="row justify-content-md-center">
                <div class="col-md-auto align-content-center">
                    <a href="#" class="head-link nav-link"><img src="icons/main-geo.svg" alt=""> <u>Волгоград</u></a>
                </div>
                <div class="col-md-auto align-content-center con">
                    <a href="#" class="head-link nav-link">8 8442 59 95 00</a>
                </div>
                <div class="col-md-auto align-content-center">
                    <a href="#" class="head-link nav-link"><img src="icons/geo.svg" alt=""> Адреса</a>
                </div>
                <div class="col-md-auto align-content-center">
                    <a href="#" class="head-link nav-link"><img src="icons/search.svg" alt=""> Результаты</a>
                </div>
                <div class="col-md-auto align-content-center">
                    <a href="#" class="head-link nav-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1051 10.4506H15.3795L16.2303 7.93984L6.77464 7.93984C6.22032 7.93984 5.83359 8.4913 6.01407 9.01681L7.64479 13.7204L16.559 13.7204L19.1888 6H21" stroke="#403360" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M14.3805 17.795C14.3805 18.3465 14.8252 18.7941 15.3731 18.7941C15.921 18.7941 16.3657 18.3465 16.3657 17.795C16.3657 17.2436 15.921 16.7959 15.3731 16.7959C14.8252 16.7959 14.3805 17.2436 14.3805 17.795Z" fill="#403360" stroke="#403360" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.83166 17.795C7.83166 18.3465 8.27641 18.7941 8.82428 18.7941C9.37215 18.7941 9.81689 18.3465 9.81689 17.795C9.81689 17.2436 9.37215 16.7959 8.82428 16.7959C8.27641 16.7959 7.83166 17.2436 7.83166 17.795Z" fill="#403360" stroke="#403360" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.2959 15.3623H8.90835" stroke="#403360" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M17.9337 2.73767C15.7909 1.36487 13.2383 0.777556 10.7109 1.0758C8.18352 1.37404 5.83775 2.53939 4.07327 4.37328C2.30879 6.20717 1.23477 8.59613 1.03421 11.1331C0.833659 13.6701 1.51898 16.1982 2.9734 18.2865C4.42781 20.3749 6.56135 21.8943 9.01047 22.586C11.4596 23.2776 14.0728 23.0987 16.4047 22.0796C18.7367 21.0605 20.6432 19.2644 21.7993 16.9973C22.9555 14.7302 23.2898 12.1323 22.7452 9.64635" stroke="#403360" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> Корзина</a>
                </div>
                <div class="col-md-auto align-content-center">
                    <a href="login.php" class="head-link nav-link"> <img src="icons/Enter.svg" alt=""> Войти</a>
                </div>
                <div class="col-md-auto align-content-center">
                    <a href="signup.php" class="head-link nav-link">Регистрация</a>
                </div>
        </nav>
    </div>
    <div class="container">
        <div class="search">
            <div class="input-group">
                <img src="icons/logo.svg" alt="Sorry!" id="kdl">
                <input type="search" class="form-control" placeholder="Поиск по анализам" id="ser" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-group" id="btn1"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.9075 28.1328L19.6944 18.1743C21.5857 16.3071 22.8466 13.5685 22.8466 10.7054C22.8466 4.73029 17.9292 0 11.877 0C5.82486 0 0.907471 4.73029 0.907471 10.7054C0.907471 16.6805 5.82486 21.4108 11.877 21.4108C14.0205 21.4108 16.0379 20.7884 17.677 19.7925L28.1423 30L29.9075 28.1328ZM3.42921 10.7054C3.42921 6.22407 7.21182 2.48963 11.877 2.48963C16.5423 2.48963 20.1988 6.09959 20.1988 10.7054C20.1988 15.3112 16.4162 18.9212 11.877 18.9212C7.33791 18.9212 3.42921 15.1867 3.42921 10.7054Z" fill="white"></path>
                    </svg></button>
                <button type="button" class="btn btn-group" id="btn2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="container drop" id="drop">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#" class="align-content-center text-dark">Выезд на дом</a>
                </div>
                <div class="col">
                    <a href="#" class="align-content-center text-dark">Анализы</a>
                </div>
                <div class="col">
                    <a href="#" class="align-content-center text-dark">Акции</a>
                </div>
                <div class="col">
                    <a href="#" class="align-content-center text-dark">Связаться с нами</a>
                </div>
                <div class="col">
                    <a href="#" class="align-content-center text-dark">TELEGRAM KDL</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-2">
    <a href="/Lab_5/export.php" class="list-group-item list-group-item-action">Экспорт</a>
    <a href="/Lab_5/import.php" class="list-group-item list-group-item-action">Импорт</a>
</div>

<div class="test">
    <h1>Популярные анализы и комплексы</h1>
    <div class="container">
        <div class="row">
            <div class="p-2 col test-item d-flex">
                <a class="test-content" href="#">
                    <div class="col">
                        <div class="row">
                            <div class="col-auto p-0"><img class="pcr-img" src="icons/cov-1.svg" alt=""></div>
                            <div class="col test-head">ПЦР-тесты</div>
                        </div>
                    </div>
                    <div class="col test-text">Позволяет определить наличие/отсутствие вируса в мазке и является основным рекомендованным методом лабораторной диагностики COVID-19.</div>
                </a>
            </div>
            <div class="p-2 col test-item d-flex">
                <a class="test-content" href="#">
                    <div class="col">
                        <div class="row">
                            <div class="col-auto p-0"><img class="pcr-img" src="icons/cov-2.svg" alt=""></div>
                            <div class="col test-head">Тесты на антитела</div>
                        </div>
                    </div>
                    <div class="col test-text">Позволяет определить наличие или уровень иммунитета в виде количества антител после перенесенной инфекции COVID‑19 или после вакцинации.</div>
                </a>
            </div>
            <div class="p-2 col test-item d-flex">
                <a class="test-content" href="#">
                    <div class="col">
                        <div class="row">
                            <div class="col-auto p-0"><img class="pcr-img" src="icons/cov-3.svg" alt=""></div>
                            <div class="col test-head">Бесконтактный анализ</div>
                        </div>
                    </div>
                    <div class="col test-text">Набор для самостоятельного взятия материала на COVID-19 методом ПЦР (мазок).</div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container pcr">
    <h1>ПЦР-тесты</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-auto"><img class="pcr-img" src="icons/cov-1.svg" alt=""></div>
        <div class="col pcr-text">ПЦР-тест, мазок, с результатом на русском и английском языке</div>
    </div>
    <br>
</div>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="row tab-item-1 border border-dark info-1">
                <div id="pan-1" class="col-4 pans"><a class="tab-link" href="#">Описание</a></div>
                <div id="pan-2" class="col-4 pans"><a class="tab-link" href="#">Подготовка</a></div>
                <div id="pan-3" class="col-4 pans"><a class="tab-link" href="#">Интерпетация</a></div>
                <div class="col">
                    <div class="tab-item-content">
                        <ul>
                            <li>Мазок, ПЦР-тест на COVID19, определение РНК коронавируса SARS-CoV-2, в т. ч. и при заражении коронавирусной инфекцией штаммами Delta и Omicron</li>
                            <li>Результат выдается на русском и английском языках с QR -кодом для проверки подлинность выполненного лабораторией исследования.</li>
                            <li>При оформлении заявки на тест требуется предъявление российского и заграничного паспортов. Анонимно сдать мазок невозможно.</li>
                            <li>Срок действия справки об отсутствии коронавируса устанавливается с момента сдачи анализа, а срок выполнения анализа указан в карточке теста.</li>
                        </ul>
                        Кому рекомндовано:
                        <br>
                        <p>Анализ для пациентов без признаков ОРВИ и не имевших контактов с заболевшими COVID-19 в течение 14 дней до исследования для планировании зарубежной поездки или предъявления по месту требования.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="tab-item-2 border border-dark info-1">
                <div class="study">
                    <span class="research">Исследование <span class="analysis-text A4">/ 13. 30. A4</span></span>
                </div>
                <div class="analysis-desc">
                    ПЦР (COVID-19) (результат на английском и русском языках) РНК коронавируса SARS-CoV-2
                </div>
                <div class="analysis-row row">
                    <div class="col row row-cols-1">
                        <div class="col analysis-text">Срок</div>
                        <div class="col"></div>
                        <div class="col">1 день</div>
                    </div>
                    <div class="col"></div>
                    <div class="col row row-cols-1">
                        <div class="col analysis-text">Биоматериал</div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="price-title">
                    <div class="analysis-text">Цена</div>
                </div>
                <div class="price-body">
                    <div class="row">
                        <div class="col-auto price-text">1 010₽</div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="analysis-log">
                    <a class="auto" href="">Авторизируйтесь</a>, чтобы получить скидку по <a class="auto" href=#">Карте Здоровья</a>
                </div>
                <div class="analysis-warning">
                    Цена указана без взятия биоматериала
                </div>
                <button class="but">Добавить в корзину</button>
                <div id="last-warning" class="analysis-warning">
                    При заказе выезда на дом итоговую стоимость с Вами согласует менеджер.
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
