<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/index.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/logic_signup.php';
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
<div class="container">
    <div class="row">
        <p class="py-2"><a href="analysis.php">Домашняя страница</a> &gt; Создание аккаунта </p>
    </div>
    <!-- Форма -->
    <div class="col-md-5 mx-auto">
        <div class="alert alert-danger error-msg d-none"></div>
        <form action="signup.php" method="POST">
            <input type="hidden" name="action" value="signup">
            <div class="form-group">
                <label for="email">Email (Логин)</label>
                <input value="<?php if(!empty($_POST['email'])) echo htmlspecialchars($_POST['email'])?>" type="email" name="email" id="email" class="form-control" placeholder="example@example.com">
                <span class="error"><?php if(!empty($emptyFields['email'])) echo htmlspecialchars($emptyFields['email']);?></span>
            </div>
            <div class="form-group">
                <label for="full_name">ФИО</label>
                <input value="<?php if(!empty($_POST['full_name'])) echo htmlspecialchars($_POST['full_name'])?>" type="text" name="full_name" id="full_name" class="form-control" placeholder="Иванов Иван Иванович">
                <span class="error"><?php if(!empty($emptyFields['full_name'])) echo htmlspecialchars($emptyFields['full_name']);?></span>
            </div>
            <div class="form-group">
                <label for="city">Город</label>
                <input value="<?php if(!empty($_POST['city'])) echo htmlspecialchars($_POST['city'])?>" type="text" name="city" id="city" class="form-control" placeholder="Город">
                <span class="error"><?php if(!empty($emptyFields['city'])) echo htmlspecialchars($emptyFields['city']);?></span>
            </div>
                <div class="form-group">
                    <label for="street">Улица</label>
                    <input value="<?php if(!empty($_POST['street'])) echo htmlspecialchars($_POST['street'])?>" type="text" name="street" id="street" class="form-control" placeholder="Улица">
                    <span class="error"><?php if(!empty($emptyFields['street'])) echo htmlspecialchars($emptyFields['street']);?></span>
                </div>
                <div class="form-group">
                    <label for="house">Дом</label>
                    <input value="<?php if(!empty($_POST['house'])) echo htmlspecialchars($_POST['house'])?>" type="text" name="house" id="house" class="form-control" placeholder="Дом">
                    <span class="error"><?php if(!empty($emptyFields['house'])) echo htmlspecialchars($emptyFields['house']);?></span>
                </div>
                <div class="form-group">
                    <label for="apartment">Квартира</label>
                    <input value="<?php if(!empty($_POST['apartment'])) echo htmlspecialchars($_POST['apartment'])?>" type="text" name="apartment" id="apartment" class="form-control" placeholder="Квартира">
                    <span class="error"><?php if(!empty($emptyFields['apartment'])) echo htmlspecialchars($emptyFields['apartment']);?></span>
                </div>
            <div class="form-group">
                <label for="sex">Пол</label>
                <select name="sex" id="sex" class="form-control">
                    <?php foreach ($sex as $item):?>
                        <option <?php if(!empty($_POST['sex']) && $_POST['sex'] == $item['id'])
                            echo 'selected="selected"'?> value="<?=$item['id']?>"><?=htmlspecialchars($item['name'])?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="birth_date">Дата рождения</label>
                <input value="<?php if(!empty($_POST['birth_date'])) echo htmlspecialchars($_POST['birth_date'])?>" type="date" name="birth_date" id="birth_date" class="form-control">
                <span class="error"><?php if(!empty($emptyFields['birth_date'])) echo htmlspecialchars($emptyFields['birth_date']);?></span>
            </div>
            <div class="form-group">
                <label for="blood_type">Группа крови</label>
                <select name="blood_type" id="blood_type" class="form-control">
                    <?php foreach ($blood_type as $item):?>
                        <option <?php if(!empty($_POST['blood_type']) && $_POST['blood_type'] == $item['id'])
                            echo 'selected="selected"'?> value="<?=$item['id']?>"><?=htmlspecialchars($item['name'])?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="factor">Резус-фактор</label>
                <select name="factor" id="factor" class="form-control">
                    <?php foreach ($factor as $item):?>
                        <option <?php if(!empty($_POST['factor']) && $_POST['factor'] == $item['id'])
                            echo 'selected="selected"'?> value="<?=$item['id']?>"><?=htmlspecialchars($item['name'])?></option>
                    <?php endforeach;?>
                </select>
                <span class="error"></span>
            </div>
            <div class="form-group">
                <label for="vk">Ссылка на профиль Вконтакте</label>
                <input value="<?php if(!empty($_POST['vk'])) echo htmlspecialchars($_POST['vk'])?>" type="url" name="vk" id="vk" class="form-control" placeholder="https://vk.com/idx">
                <span class="error"><?php if(!empty($emptyFields['vk'])) echo htmlspecialchars($emptyFields['vk']);?></span>
            </div>
            <div class="form-group">
                <label for="interests">Интересы</label>
                <textarea class="form-control" name="interests" id="interests" placeholder="Опишите ваши интересы"><?php if(!empty($_POST['interests'])) echo htmlspecialchars(trim($_POST['interests']))?></textarea>
                <span class="error"><?php if(!empty($emptyFields['interests'])) echo htmlspecialchars($emptyFields['interests']);?></span>
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input value="<?php if(!empty($_POST['password'])) echo htmlspecialchars($_POST['password'])?>" type="password" name="password" id="password" class="form-control" placeholder="Совершенно секретно">
                <span class="error"><?php
                    if(!empty($emptyFields['password'])) echo htmlspecialchars($emptyFields['password']);
                    if(isset($isValid) && $isValid === false) echo 'Пароль должен состоять из 6-12 символов, 0-9 a-z A-Z и иметь как минимум одну цифру, одну маленькую и одну большую букву!';
                ?></span>
            </div>
            <div class="form-group">
                <label for="password_confirm">Подтвердите пароль</label>
                <input value="<?php if(!empty($_POST['password_confirm'])) echo htmlspecialchars($_POST['password_confirm'])?>" type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Совершенно секретно">
                <span class="error"><?php
                    if(!empty($emptyFields['password_confirm'])) echo $emptyFields['password_confirm'];
                    if(isset($equalityPasswords) && $equalityPasswords === false) echo 'Пароли не совпадают!';
                    ?></span>
            </div>
            <div class="col-md-12 text-center ">
                <button name="submit" type="submit" class=" btn btn-block btn-primary tx-tfm register-btn">
                    Зарегистрироваться
                </button>
            </div>
            <div class="form-group">
                <p class="text-center">Уже есть аккаунт? <a href="login.php">Войти в аккаунт</a></p>
            </div>
        </form>
        <!--Отображение шаблона формы регистрации.
        Данные об ошибках выводим из $signUpErrors,
        поля формы предзаполняем из $_POST с фильтрацией!-->
    </div>
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
</body>
</html>
