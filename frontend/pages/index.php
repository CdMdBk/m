<?php
    session_start();
    $id_user= $_SESSION['id_user'];
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
    <meta name="description"
          content="Здесь представлены мои лучшие работы, которые можете не только посмотреть, но и оценить.">

    <link rel="stylesheet"
          href="../styles/bootstrap.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css"
          rel="stylesheet">
    <link rel="stylesheet"
          href="../styles/preloader.css">
    <link rel="stylesheet"
          href="../styles/base-styles.css">
    <link rel="stylesheet"
          href="../styles/fonts.css">

    <link rel="stylesheet"
          href="../styles/landing_page/validation.css">
    <link rel="stylesheet"
          href="../styles/landing_page/header.css">
    <link rel="stylesheet"
          href="../styles/landing_page/about-me.css">
    <link rel="stylesheet"
          href="../styles/landing_page/portfolio.css">
    <link rel="stylesheet"
          href="../styles/landing_page/price.css">
    <link rel="stylesheet"
          href="../styles/landing_page/feedback.css">
    <link rel="stylesheet"
          href="../styles/landing_page/appointment.css">
    <link rel="stylesheet"
          href="../styles/landing_page/footer.css">
    <link rel="icon"
          href="../images/favicon.svg">

    <script src="../scripts/common/jquery-3.7.1.min.js"></script>

    <title>
        M
    </title>
</head>
<body>
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

    <form class="validation validation__registration">
        <fieldset class="validation__container validation__container_bg">
            <legend class="validation__header validation__header_font">
                Почувствуй момент вместе с нами!
            </legend>

            <fieldset id="form-container"
                      class="validation__registration">
                <fieldset class="validation__input-box">
                    <label class="validation__input-box_font"
                           for="nameUser">
                        Имя пользователя
                    </label>

                    <input class="validation__input"
                           id="nameUser"
                           name="nameUser"
                           type="text"
                           placeholder="Введите имя пользователя"
                           autocomplete="given-name"
                           required>
                </fieldset>

                <fieldset class="validation__input-box">
                    <label class="validation__input-box_font"
                           for="emailUser">
                        Почта
                    </label>

                    <input class="validation__input"
                           id="emailUser"
                           name="emailUser"
                           type="email"
                           placeholder="Введите почту"
                           autocomplete="email"
                           required>
                </fieldset>

                <fieldset class="validation__input-box">
                    <label class="validation__input-box_font"
                           for="passwordUser">
                        Пароль
                    </label>

                    <input class="validation__input"
                           id="passwordUser"
                           name="passwordUser"
                           type="password"
                           placeholder="Введите пароль"
                           autocomplete="new-password"
                           required>
                </fieldset>

                <input class="validation__button validation__button_bg"
                       type="submit"
                       value="Зарегистрироваться"
                       required>

                <button onclick="switchForm()"
                        class="validation__button-switch validation__button-switch_font"
                        id="switch-form"
                        type="button">
                    У вас уже есть учётная запись?
                </button>
            </fieldset>
        </fieldset>
    </form>

    <form class="validation validation__authorization">
        <fieldset class="validation__container validation__container_bg">
            <legend class="validation__header validation__header_font">
                Почувствуй момент вместе с нами!
            </legend>

            <fieldset id="form-container"
                      class="validation__registration">
                <fieldset class="validation__input-box">
                    <label class="validation__input-box_font" for="emailUser">
                        Почта
                    </label>

                    <input class="validation__input" id="emailUser" name="emailUser" type="email" placeholder="Введите почту" required>
                </fieldset>

                <fieldset class="validation__input-box">
                    <label class="validation__input-box_font" for="passwordUser">
                        Пароль
                    </label>

                    <input class="validation__input" id="passwordUser" name="passwordUser" type="password" placeholder="Введите пароль" required>
                </fieldset>

                <input class="validation__button validation__button_bg" type="submit" value="Войти" required>

                <button onclick="switchForm()" class="validation__button-switch validation__button-switch_font" id="switch-form" type="button">
                    Ещё нет аккаунта? Зарегистрируйтесь
                </button>
            </fieldset>
        </fieldset>
    </form>

    <header class="header header_bg">
        <div class="container">
            <nav class="row nav">
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
                           href="#about-me">
                            Обо мне
                        </a>
                    </li>

                    <li class="nav__li">
                        <a class="nav__ul_font"
                           href="#portfolio">
                            Портфолио
                        </a>
                    </li>

                    <li class="nav__li">
                        <a class="nav__ul_font"
                           href="#price">
                            Прайс
                        </a>
                    </li>

                    <?php if (!empty($id_user)) { ?>
                        <li class="nav__li">
                            <a class="nav__ul_font"
                               href="#appointment">
                                Запись
                            </a>
                        </li>
                    <?php } ?>

                    <li class="nav__li">
                        <a class="nav__ul_font"
                           href="#feedback">
                            Отзывы
                        </a>
                    </li>

                    <?php if (empty($id_user)) { ?>
                        <li class="nav__li"
                            data-show-validation>
                            <p class="nav__ul_font">
                                Вход
                            </p>
                        </li>
                    <?php } else {?>
                        <li class="nav__li">
                            <a class="nav__ul_font nav__ul_font-link"
                               href="personal-account.php">
                                ЛК
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
            
            <div class="row header-content header-content_bg">
                <blockquote class="header-content__quote-box">
                    <h1 class="header-content_font-heading">
                        Жизнь как кадр из фильма, запечатли этот важный момент
                    </h1>

                    <p class="header-content_font-name">
                        Джон Блей
                    </p>
                </blockquote>

                <p class="header-content_font-text">
                    Fashion-фотограф
                </p>

                <?php if (empty($id_user)) { ?>
                <button class="header-content__button"
                        type="button"
                        data-show-validation>
                    <a class="header-content__button_font"
                       href="#">
                        Записаться
                    </a>
                </button>
                <?php } ?>
            </div>
        </div>
    </header>

    <main>
        <div class="about-me_bg"></div>

        <section class="container">
            <div class="row about-me">
                <div class="col-6 col-md-12 about-me__text-box">
                    <h2 id="about-me"
                        class="heading heading_font">
                        Обо мне
                    </h2>

                    <p class="about-me__text-box_font">
                        Меня зовут Джон и я рад приветствовать вас! Здесь представлены мои лучшие работы, которые можете не только посмотреть, но и оценить. Фотография для меня это вкус жизни, которым я наслаждаюсь и живу уже более 13 лет. Съемки проходят в Москве, Санкт-Петербурге и в Элисте.
                    </p>
                </div>

                <div class="col-6 col-md-12 about-me__container-images">
                    <div class="about-me__image-box">
                        <img class="about-me_image"
                             src="../images/landing_page/about_me/photo-1.png">

                        <p class="about-me__image_font">
                            Fashion
                        </p>
                    </div>

                    <div class="about-me__image-box">
                        <img class="about-me_image"
                             src="../images/landing_page/about_me/photo-2.png">

                        <p class="about-me__image_font">
                            photographer
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container"
                 data-aos="fade-up">
            <h2 id="portfolio"
                class="heading heading_font">
                Портфолио
            </h2>

            <div class="portfolio portfolio_grid">
                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-1.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        С осьминогом
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-2.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Улица
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-3.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Девушка
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-4.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Для журнала
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-5.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Свадьба
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-6.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Фото под водой
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-7.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Портрет неон
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-8.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Неон
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-9.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Портрет
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-10.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Улица - ночь
                    </p>
                </div>

                <div class="portfolio__item">
                    <img class="portfolio__image"
                         src="../images/landing_page/portfolio/photo-11.png"
                         alt="photo">

                    <p class="portfolio_bg portfolio_font">
                        Подводная
                    </p>
                </div>
            </div>

            <div class="portfolio__button-container">
                <button class="portfolio__button portfolio__button_font"
                        type="button">
                    Показать ещё
                </button>
            </div>
        </section>

        <section class="price container"
                 data-aos="fade-up">
            <h2 id="price"
                class="heading heading_font">
                Прайс
            </h2>

            <div class="price__container row">
                <div class="price__card price__card_bg col-4 col-md-6 col-sm-12">
                    <div class="price__image-box">
                        <img class="price__image"
                             src="../images/landing_page/price/package-minimum.png"
                             alt="photo">
                    </div>

                    <div class="price__card-info">
                        <h3 class="price__card_header-font">
                            Package "Minimum"
                        </h3>

                        <p class="price__card_font">
                            9.000 тысяч рублей<br>
                            Длительность съемки: 1,5 часа<br>
                            Обработанные фото: 10-25<br>
                            Стилист-гример: нет
                        </p>

                        <?php if (empty($id_user)) { ?>
                            <button class="price__button price__button_font"
                                    data-show-validation>
                                Записаться
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <div class="price__card price__card_bg col-4 col-md-6 col-sm-12">
                    <div class="price__image-box">
                        <img class="price__image"
                             src="../images/landing_page/price/package-standard.png"
                             alt="photo">
                    </div>

                    <div class="price__card-info">
                        <h3 class="price__card_header-font">
                            Package "Standard"
                        </h3>

                        <p class="price__card_font">
                            15.000 тысяч рублей<br>
                            Длительность съемки: 2,5 часа<br>
                            Обработанные фото: 15-25<br>
                            Стилист-гример: да
                        </p>

                        <?php if (empty($id_user)) { ?>
                            <button class="price__button price__button_font"
                                    data-show-validation>
                                Записаться
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <div class="price__card price__card_bg col-4 col-md-6 col-sm-12">
                    <div class="price__image-box">
                        <img class="price__image"
                             src="../images/landing_page/price/package-vip.png"
                             alt="photo">
                    </div>

                    <div class="price__card-info">
                        <h3 class="price__card_header-font">
                            Package "Vip"
                        </h3>

                        <p class="price__card_font">
                            20.000 тысяч рублей<br>
                            Длительность съемки: 2,5 часа<br>
                            Обработанные фото: 15-25<br>
                            Стилист-гример: да
                        </p>

                        <?php if (empty($id_user)) { ?>
                            <button class="price__button price__button_font"
                                    data-show-validation>
                                Записаться
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <div class="price__card price__card_bg col-4 col-md-6 col-sm-12">
                    <div class="price__image-box">
                        <img class="price__image"
                             src="../images/landing_page/price/package-duo.png"
                             alt="photo">
                    </div>

                    <div class="price__card-info">
                        <h3 class="price__card_header-font">
                            Package "Duo"
                        </h3>

                        <p class="price__card_font">
                            25.000 тысяч рублей<br>
                            Длительность съемки: 2,5-3 часа<br>
                            Обработанные фото: 30-35<br>
                            Стилист-гример: да
                        </p>

                        <?php if (empty($id_user)) { ?>
                            <button class="price__button price__button_font"
                                    data-show-validation>
                                Записаться
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <div class="price__card price__card_bg col-4 col-md-6 col-sm-12">
                    <div class="price__image-box">
                        <img class="price__image"
                             src="../images/landing_page/price/package-portfolio.png"
                             alt="photo">
                    </div>

                    <div class="price__card-info">
                        <h3 class="price__card_header-font">
                            Package "Portfolio"
                        </h3>

                        <p class="price__card_font">
                            15.000 тысяч рублей<br>
                            Длительность съемки: 3 часа<br>
                            Обработанные фото: 25-30<br>
                            Стилист-гример: да
                        </p>

                        <?php if (empty($id_user)) { ?>
                            <button class="price__button price__button_font"
                                    data-show-validation>
                                Записаться
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <div class="price__card price__card_bg col-4 col-md-6 col-sm-12">
                    <div class="price__image-box">
                        <img class="price__image"
                             src="../images/landing_page/price/package-underwater.png"
                             alt="photo">
                    </div>

                    <div class="price__card-info">
                        <h3 class="price__card_header-font">
                            Package "Underwater"
                        </h3>

                        <p class="price__card_font">
                            50.000 тысяч рублей<br>
                            Длительность съемки: 5 часов<br>
                            Обработанные фото: 20-25<br>
                            Стилист-гример: да
                        </p>

                        <?php if (empty($id_user)) { ?>
                            <button class="price__button price__button_font"
                                    data-show-validation>
                                Записаться
                            </button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <?php if (!empty($id_user)) { ?>
            <section class="appointment appointment_bg"
                 data-aos="fade-up">
            <div class="container">
                <h2 id="appointment"
                    class="heading heading_font">
                    Запись
                </h2>

                <form class="appointment__flex-box">
                    <fieldset class="appointment__inputs-box">
                        <fieldset>
                            <fieldset class="appointment__input-box">
                                <select class="appointment__input appointment__input_bg"
                                        name="cities"
                                        required>
                                    <option disabled
                                            selected
                                            value>
                                        Город
                                    </option>

                                    <option value="1">
                                        Москва
                                    </option>

                                    <option value="2">
                                        Санкт-Петербург
                                    </option>

                                    <option value="3">
                                        Элиста
                                    </option>
                                </select>

                                <img class="appointment__input-box_arrow"
                                     src="../images/landing_page/appointment/arrow.svg"
                                     alt="arrow">
                            </fieldset>

                            <fieldset class="appointment__input-box">
                                <select class="appointment__input appointment__input_bg"
                                        name="styles"
                                        required>
                                    <option disabled
                                            selected
                                            value>
                                        Выберите город
                                    </option>
                                </select>

                                <img class="appointment__input-box_arrow"
                                     src="../images/landing_page/appointment/arrow.svg"
                                     alt="arrow">
                            </fieldset>

                            <fieldset class="appointment__input-box">
                                <select class="appointment__input appointment__input_bg"
                                        name="services"
                                        required>
                                    <option disabled
                                            selected
                                            value>
                                        Выберите стиль
                                    </option>
                                </select>

                                <img class="appointment__input-box_arrow"
                                     src="../images/landing_page/appointment/arrow.svg"
                                     alt="arrow">
                            </fieldset>
                        </fieldset>

                        <fieldset>
                            <fieldset class="appointment__input-box">
                                <input class="appointment__input appointment__input_bg"
                                       id="date"
                                       name="date"
                                       type="datetime-local"
                                       required>

                                <img class="appointment__input-box_arrow"
                                     src="../images/landing_page/appointment/arrow.svg"
                                     alt="arrow">
                            </fieldset>

                            <textarea class="appointment__input appointment__input_bg"
                                      name="comment"
                                      id="comment"
                                      cols="30"
                                      rows="10"
                                      placeholder="Комментарий"></textarea>
                        </fieldset>
                    </fieldset>

                    <fieldset class="appointment__inputs-box">
                        <button class="appointment__button appointment__button_style">
                            Записаться
                        </button>
                    </fieldset>
                </form>
            </div>
        </section>
        <?php } ?>

        <section class="feedback feedback_bg"
                 data-aos="fade-up">
            <div class="container">
                <h2 id="feedback"
                    class="heading heading_font">
                    Отзывы
                </h2>

                <div class="feedback__slider">
                    <div class="feedback__triangle-box"></div>

                    <div class="feedback__slider-window">
                        <div class="feedback__slider-length">
                            <div class="feedback__card feedback__card_bg">
                                <div class="feedback__box-image">
                                    <img class="feedback__image"
                                         src="../images/landing_page/feedback/avatar-photo-1.png"
                                         alt="avatar">
                                </div>

                                <div class="feedback__box-stars">
                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">
                                </div>

                                <p class="feedback_font">
                                    Джон, спасибо большое за такую классную фотосессию! Я давно не получала такую отдачу и такие хорошие эмоции, так еще и фотографии огонь!
                                </p>
                            </div>

                            <div class="feedback__card feedback__card_bg">
                                <div class="feedback__box-image">
                                    <img class="feedback__image"
                                         src="../images/landing_page/feedback/avatar-photo-2.png"
                                         alt="avatar">
                                </div>

                                <div class="feedback__box-stars">
                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">
                                </div>

                                <p class="feedback_font">
                                    Было очень приятно с тобой работать. Снимки просто нереальные!!! У нас впереди еще очень много интересных проектов!
                                </p>
                            </div>

                            <div class="feedback__card feedback__card_bg">
                                <div class="feedback__box-image">
                                    <img class="feedback__image"
                                         src="../images/landing_page/feedback/avatar-photo-3.png"
                                         alt="avatar">
                                </div>

                                <div class="feedback__box-stars">
                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">
                                </div>

                                <p class="feedback_font">
                                    Съемка была просто на высоте! Локации и идеи просто бомба! Приду еще раз обязательно
                                </p>
                            </div>

                            <div class="feedback__card feedback__card_bg">
                                <div class="feedback__box-image">
                                    <img class="feedback__image"
                                         src="../images/landing_page/feedback/avatar-photo-3.png"
                                         alt="avatar">
                                </div>

                                <div class="feedback__box-stars">
                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">
                                </div>

                                <p class="feedback_font">
                                    Съемка была просто на высоте! Локации и идеи просто бомба! Приду еще раз обязательно
                                </p>
                            </div>

                            <div class="feedback__card feedback__card_bg">
                                <div class="feedback__box-image">
                                    <img class="feedback__image"
                                         src="../images/landing_page/feedback/avatar-photo-3.png"
                                         alt="avatar">
                                </div>

                                <div class="feedback__box-stars">
                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">

                                    <img class="feedback__star"
                                         src="../images/landing_page/feedback/star.png"
                                         alt="star">
                                </div>

                                <p class="feedback_font">
                                    Съемка была просто на высоте! Локации и идеи просто бомба! Приду еще раз обязательно
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="feedback__triangle-box"></div>
                </div>
            </div>

            <footer class="container footer footer_bg">
                    <div class="row footer__content">
                        <div class="col-3 col-md-12 logo">
                            <img class="logo_size"
                                 src="../images/favicon.svg"
                                 alt="icon">
                        </div>

                        <ul class="col-6 col-md-12 footer__ul">
                            <li class="footer__li">
                                <a class="footer__li_font"
                                   href="#about-me">
                                    Обо мне
                                </a>
                            </li>

                            <li class="footer__li">
                                <a class="footer__li_font"
                                   href="#portfolio">
                                    Портфолио
                                </a>
                            </li>

                            <li class="footer__li">
                                <a class="footer__li_font"
                                   href="#price">
                                    Прайс
                                </a>
                            </li>

                            <?php if (!empty($id_user)) { ?>
                            <li class="footer__li">
                                <a class="footer__li_font"
                                   href="#appointment">
                                    Запись
                                </a>
                            </li>
                            <?php } ?>

                            <li class="footer__li">
                                <a class="footer__li_font"
                                   href="#feedback">
                                    Отзывы
                                </a>
                            </li>
                        </ul>

                        <div class="col-3 col-md-12 footer__telephone footer__telephone_font"
                             itemprop="telephone">
                            +7(901)745-54-96
                        </div>
                    </div>
            </footer>
        </section>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="../scripts/common/preloader.js"></script>
    <script src="../scripts/landing_page/validation.js"></script>
    <script src="../scripts/landing_page/change-nav-font.js"></script>
    <script src="../scripts/landing_page/burger.js"></script>
    <script src="../scripts/landing_page/show-portfolio-images.js"></script>
    <script src="../scripts/landing_page/registration-field.js"></script>
    <script src="../scripts/landing_page/slider.js"></script>

    <script src="../scripts/ajax/all-variables.js"></script>
    <script src="../scripts/ajax/login/registration.js"></script>
    <script src="../scripts/ajax/login/authorization.js"></script>
    <script src="../scripts/ajax/recording/linked-lists.js"></script>
    <script src="../scripts/ajax/recording/record.js"></script>
</body>
</html>