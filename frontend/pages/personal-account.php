<?php
    session_start();
    $id_user = $_SESSION['id_user'];
    $name_user = $_SESSION['name_user'];
    $email_user = $_SESSION['email_user'];
    $telephone_user = $_SESSION['telephone_user'];
    $nickname_user = $_SESSION['nickname_user'];
    $brief_information_user = $_SESSION['brief_information_user'];

    if (empty($id_user)) exit();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <meta name="author"
          content="Милана Горошаева">
    <meta name="keywords"
          content="photo">

    <link rel="stylesheet"
          href="../styles/bootstrap.css">
    <link rel="stylesheet"
          href="../styles/preloader.css">
    <link rel="stylesheet"
          href="../styles/base-styles.css">
    <link rel="stylesheet"
          href="../styles/fonts.css">

    <link rel="stylesheet"
          href="../styles/landing_page/header.css">
    <link rel="stylesheet"
          href="../styles/accounts/base-styles.css">
    <link rel="stylesheet"
          href="../styles/accounts/account-nav.css">
    <link rel="stylesheet"
          href="../styles/accounts/my-photos.css">
    <link rel="stylesheet"
          href="../styles/accounts/editing-account.css">
    <link rel="icon"
          href="../images/favicon.svg">

    <script src="../scripts/common/jquery-3.7.1.min.js"></script>

    <title>
        <?=$name_user?>
    </title>
</head>
<body class="account">
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>

    <nav class="container">
        <div class="row nav">
            <div class="col-2 col-sm-6 logo">
                <img class="logo_size"
                     src="../images/favicon.svg"
                     alt="icon">
            </div>

            <div class="col-sm-6 nav__burger">
                <span></span>
            </div>

            <ul class="col-10 col-12 nav__ul">
                <li class="nav__li">
                    <a class="nav__ul_font"
                       href="index.php#about-me">
                        Обо мне
                    </a>
                </li>

                <li class="nav__li">
                    <a class="nav__ul_font"
                       href="index.php#portfolio">
                        Портфолио
                    </a>
                </li>

                <li class="nav__li">
                    <a class="nav__ul_font"
                       href="index.php#price">
                        Прайс
                    </a>
                </li>

                <li class="nav__li">
                    <a class="nav__ul_font"
                       href="index.php#appointment">
                        Запись
                    </a>
                </li>

                <li class="nav__li">
                    <a class="nav__ul_font"
                       href="index.php#feedback">
                        Отзывы
                    </a>
                </li>

                <li class="nav__li">
                    <button class="nav__ul_font nav__ul_font-link"
                            type="button"
                            data-exit>
                        Выход
                    </button>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container account__container">
        <nav class="account-nav"
             data-nav-personal>
            <button class="account-nav__content"
                    data-nav-box-avatar
                    type="button">
                <img class="account-nav__user"
                     src="../images/accounts/user.svg"
                     alt="avatar">

                <p class="account-nav_font account-nav_active-status" data-name>
                    <?=$name_user?>
                </p>
            </button>

            <button class="account-nav__content"
                    type="button">

                <svg class="account-nav__user account-nav__user_active-status"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 716.68 650">
                    <defs>
                        <style>
                            .cls-2{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:50px;}
                        </style>
                    </defs>
                    <g id="Слой_2"
                       data-name="Слой 2">
                        <g id="Слой_1-2"
                           data-name="Слой 1">
                            <path class="account-nav__svg_color_active"
                                  d="M34.64,140.54V528.62s21.69,87.83,123.69,88.86,437.06,2.3,437.06,2.3,88.46,15.06,96.28-247.41S657.92,69.69,657.92,69.69L576,26.16H115.32L47.91,104.79Z"/>
                            <path class="cls-2"
                                  d="M225,291.67A66.67,66.67,0,1,0,158.33,225,66.67,66.67,0,0,0,225,291.67Z"/>
                            <path class="cls-2"
                                  d="M177,625C362.68,221.67,517,151,691.68,412.67"/>
                            <path class="cls-2"
                                  d="M558.33,25h-400A133.34,133.34,0,0,0,25,158.33V491.67A133.34,133.34,0,0,0,158.33,625h400A133.34,133.34,0,0,0,691.67,491.67V158.33A133.34,133.34,0,0,0,558.33,25Z"/>
                        </g>
                    </g>
                </svg>

                <p class="account-nav_font account-nav_font_active account-nav_active-status">
                    Мои фотографии
                </p>
            </button>

            <button class="account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/accounts/nav/camera.svg"
                     alt="Записи">

                <p class="account-nav_font account-nav_active-status">
                    Записи
                </p>
            </button>

            <button class="account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/accounts/nav/loyalty.svg"
                     alt="Программа лояльности">

                <p class="account-nav_font account-nav_active-status">
                    Программа лояльности
                </p>
            </button>

            <button class="account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/accounts/nav/profile.svg"
                     alt="Сотрудничество">

                <p class="account-nav_font account-nav_active-status">
                    Сотрудничество
                </p>
            </button>
        </nav>

        <section class="account-photos">
            <h3 class="account-photos__heading account-photos__heading_font">
<!--                Фотосессия 21.04.23-->
            </h3>

            <div class="account-photos__flex-box">
<!--                <div class="account-photos__photo">-->
<!--                    <img class="account-photos_image"-->
<!--                         src="../images/accounts/eva/1.png"-->
<!--                         alt="photo">-->
<!--                </div>-->

<!--                <div class="account-photos__photo">-->
<!--                    <img class="account-photos_image"-->
<!--                         src="../images/accounts/eva/2.png"-->
<!--                         alt="photo">-->
<!--                </div>-->

<!--                <div class="account-photos__photo">-->
<!--                    <img class="account-photos_image"-->
<!--                         src="../images/accounts/eva/3.png"-->
<!--                         alt="photo">-->
<!--                </div>-->

<!--                <div class="account-photos__photo">-->
<!--                    <img class="account-photos_image"-->
<!--                         src="../images/accounts/eva/4.png"-->
<!--                         alt="photo">-->
<!--                </div>-->

<!--                <div class="account-photos__photo">-->
<!--                    <img class="account-photos_image"-->
<!--                         src="../images/accounts/eva/5.png"-->
<!--                         alt="photo">-->
<!--                </div>-->

<!--                <div class="account-photos__photo">-->
<!--                    <img class="account-photos_image"-->
<!--                         src="../images/accounts/eva/6.png"-->
<!--                         alt="photo">-->
<!--                </div>-->

<!--                <div class="account-photos__photo">-->
<!--                    <img class="account-photos_image"-->
<!--                         src="../images/accounts/eva/7.png"-->
<!--                         alt="photo">-->
<!--                </div>-->

<!--                <div class="account-photos__photo">-->
<!--                    <img class="account-photos_image"-->
<!--                         src="../images/accounts/eva/8.png"-->
<!--                         alt="photo">-->
<!--                </div>-->

<!--                <div class="account-photos__photo">-->
<!--                    <img class="account-photos_image"-->
<!--                         src="../images/accounts/eva/9.png"-->
<!--                         alt="photo">-->
<!--                </div>-->
            </div>
        </section>

        <section class="account-albums">
            <div class="account-albums__container">
<!--                <div class="account-albums__item">-->
<!--                    <img class="account-albums__photo"-->
<!--                         src="../images/accounts/eva/main-1.png"-->
<!--                         alt="photo">-->
<!---->
<!--                    <div class="account-albums__text-box">-->
<!--                        <p class="account-albums_text">-->
<!--                            Исходники-->
<!--                        </p>-->
<!---->
<!--                        <p class="account-albums_text">-->
<!--                            9 фото-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="account-albums__item">-->
<!--                    <img class="account-albums__photo"-->
<!--                         src="../images/accounts/eva/main-2.png"-->
<!--                         alt="photo">-->
<!---->
<!--                    <div class="account-albums__text-box">-->
<!--                        <p class="account-albums_text">-->
<!--                            Обработанные-->
<!--                        </p>-->
<!---->
<!--                        <p class="account-albums_text">-->
<!--                            9 фото-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </section>

<!--        <section class="account-photos">-->
<!--            <h3 class="account-photos__heading account-photos__heading_font">-->
<!--                У вас не было фотосессий-->
<!--            </h3>-->
<!---->
<!--            <div class="account-photos__flex-box"></div>-->
<!--        </section>-->
<!---->
<!--        <section class="account-albums"></section>-->
    </main>

    <main class="profile profile_bg">
        <div class="profile__header">
            <div class="profile__header-name">
                <img class="profile__header_image"
                     src="../images/accounts/eva/avatar.png"
                     alt="avatar">
                <h1 class="profile__header_heading">
                    <?=$name_user?><br>
                    <span>
                        Подробнее
                    </span>
                </h1>
            </div>
            
            <div class="profile__header-buttons">
                <button class="profile__button profile__button_appearance">
                    Редактировать профиль
                </button>
                
                <button class="profile__button profile__button_appearance">
                    Выход
                </button>
            </div>
        </div>
        
        <div class="data data_bg">
            <div class="data__child-block">
                <img class="data_image"
                     src="../images/accounts/eva/image.png"
                     alt="avatar">
            </div>

            <ul class="data__child-block">
                <li class="data__li data__li_font">
                     Имя
                </li>

                <li class="data__li data__li_font"
                    data-change>
                    <?=$name_user?>
                </li>
            </ul>

            <ul class="data__child-block">
                <li class="data__li data__li_font">
                    Почта
                </li>

                <li class="data__li data__li_font"
                    data-change>
                    <?=$email_user?>
                </li>
            </ul>

            <ul class="data__child-block">
                <li class="data__li data__li_font">
                    Телефон
                </li>

                <li class="data__li data__li_font"
                    data-change>
                    <?=$telephone_user?>
                </li>
            </ul>

            <ul class="data__child-block">
                <li class="data__li data__li_font">
                    Никнейм
                </li>

                <li class="data__li data__li_font"
                    data-change>
                    <?=$nickname_user?>
                </li>
            </ul>

            <ul class="data__child-block">
                <li class="data__li data__li_font">
                    Краткая информация
                </li>

                <li class="data__li data__li_font"
                    data-change data-textarea>
                    <?=$brief_information_user?>
                </li>
            </ul>
        </div>

        <form class="data data_bg">
            <fieldset class="data__child-block">
                <input class="data_input-image"
                       type="file"
                       id="image"
                       name="image"
                       value="Измените фото">
            </fieldset>

            <fieldset class="data__child-block">
                <label class="data__li data__li_font"
                       for="name">
                    Имя
                </label>

                <input class="data__input"
                       type="text"
                       id="name"
                       name="name"
                       value="<?=$name_user?>"
                       placeholder="Введите имя"
                       autocomplete="given-name">
            </fieldset>

            <fieldset class="data__child-block">
                <label class="data__li data__li_font"
                       for="email">
                    Почта
                </label>

                <input class="data__input"
                       type="email"
                       id="email"
                       name="email"
                       value="<?=$email_user?>"
                       placeholder="Введите почту"
                       autocomplete="email">
            </fieldset>

            <fieldset class="data__child-block">
                <label class="data__li data__li_font"
                       for="telephone">
                    Телефон
                </label>

                <input class="data__input"
                       type="tel"
                       id="telephone"
                       name="telephone"
                       value="<?=$telephone_user?>"
                       placeholder="Введите телефон"
                       autocomplete="tel">
            </fieldset>

            <fieldset class="data__child-block">
                <label class="data__li data__li_font"
                       for="nickname">
                    Никнейм
                </label>

                <input class="data__input"
                       type="text"
                       id="nickname"
                       name="nickname"
                       value="<?=$nickname_user?>"
                       placeholder="Введите ник"
                       autocomplete="nickname">
            </fieldset>

            <fieldset class="data__child-block">
                <label class="data__li data__li_font"
                       for="info">
                    Краткая информация
                </label>

                <textarea class="data__input"
                          type="text"
                          id="info"
                          name="brief_information"
                          autocomplete="nickname"
                          rows="10"
                          placeholder="Введите информацию о себе"><?=$brief_information_user?></textarea>
            </fieldset>

            <fieldset class="data__button">
                <input class="data__button_appearance"
                       type="submit"
                       id="submit"
                       name="submit"
                       value="Сохранить">
            </fieldset>
        </form>
    </main>

    <script src="../scripts/common/preloader.js"></script>
    <script src="../scripts/landing_page/burger.js"></script>
    <script src="../scripts/accounts/user-work.js"></script>

    <script src="../scripts/ajax/all-variables.js"></script>
    <script src="../scripts/ajax/login/exit-user.js"></script>
    <script src="../scripts/ajax/login/edit-user.js"></script>
</body>
</html>