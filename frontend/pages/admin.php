<?php
    session_start();
    $id_user = $_SESSION['id_user'];

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
          href="../styles/accounts/records.css">
    <link rel="stylesheet"
          href="../styles/accounts/filters.css">
    <link rel="stylesheet"
          href="../styles/accounts/orders.css">
    <link rel="icon"
          href="../images/favicon.svg">

    <script src="../scripts/common/jquery-3.7.1.min.js"></script>

    <title>
        Admin
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

            <h2 class="heading"
                data-admin-heading>
                Администратор
            </h2>
        </div>
    </nav>

    <main class="container account__container">
        <nav class="account-nav"
             data-admin-nav>
            <button class="account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/statistics.svg"
                     alt="Статистика">

                <p class="account-nav_font account-nav_active-status">
                    Статистика
                </p>
            </button>

            <button class="account-nav_font account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/info.svg"
                     alt="О нас">

                <p class="account-nav_font account-nav_active-status">
                    О нас
                </p>
            </button>

            <button class="account-nav_font account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/crm.svg"
                     alt="CRM">

                <p class="account-nav_font account-nav_active-status">
                    CRM
                </p>
            </button>

            <button class="account-nav_font account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/portfolio.svg"
                     alt="Портфолио">

                <p class="account-nav_font account-nav_active-status">
                    Портфолио
                </p>
            </button>

            <button class="account-nav_font account-nav__content"
                    type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/accounts/nav/camera.svg"
                     alt="Записи">

                <p class="account-nav_font account-nav_active-status">
                    Записи
                </p>
            </button>

            <a class="account-nav_font account-nav__content"
               href="index.php"
               type="button">
                <img class="account-nav__user account-nav__user_active-status"
                     src="../images/admin/exit.svg"
                     alt="Записи">

                <p class="account-nav_font account-nav_active-status"
                   data-exit>
                    Выход
                </p>
            </a>
        </nav>

        <section class="admin-panel admin-panel_bg">
            <div class="admin-panel__filters-block">
                <div class="admin-panel__count-recording">
                    <h5 class="admin-panel__count-recording_heading">
                        Записи
                    </h5>

                    <p class="admin-panel__count-recording_font"></p>
                </div>

                <div class="admin-panel__input-container">
                    <div class="admin-panel__fieldset">
                        <label for="id"
                               class="admin-panel__fieldset_font">
                            ID записи
                        </label>

                        <input class="admin-panel__input"
                               id="id"
                               name="id"
                               type="text">
                    </div>

                    <div class="admin-panel__fieldset">
                        <label for="customer"
                               class="admin-panel__fieldset_font">
                            Заказчик
                        </label>

                        <input class="admin-panel__input"
                               id="customer"
                               name="customer"
                               type="text">
                    </div>

                    <div class="admin-panel__fieldset">
                        <label for="style"
                               class="admin-panel__fieldset_font">
                            Стиль
                        </label>

                        <select class="admin-panel__input"
                                name="style"
                                id="style">
                            <option value="">
                                Все
                            </option>

                            <option value="Студийная съёмка">
                                Студийная съёмка
                            </option>

                            <option value="Подводная съёмка">
                                Подводная съёмка
                            </option>

                            <option value="Выездная съёмка">
                                Выездная съёмка
                            </option>
                        </select>

                        <img class="admin-panel__input_arrow"
                             src="../images/admin/arrow.svg"
                             alt="arrow">
                    </div>

                    <div class="admin-panel__fieldset">
                        <label for="date"
                               class="admin-panel__fieldset_font">
                            Сортировка
                        </label>

                        <input class="admin-panel__input"
                               id="date"
                               name="date"
                               type="datetime-local">

                        <img class="admin-panel__input_arrow"
                             src="../images/admin/arrow.svg"
                             alt="arrow">
                    </div>
                </div>

                <div class="admin-panel__buttons-box">
                    <button class="admin-panel__button admin-panel__button_appearance">
                        Отчёт
                    </button>

                    <button class="admin-panel__button admin-panel__button_appearance">
                        Найти
                    </button>
                </div>
            </div>

            <div class="orders-data"></div>

            <div class="orders-data__button-box">
                <button class="orders-data__button orders-data__button_appearance">
                    Редактировать
                </button>

                <button class="orders-data__button orders-data__button_appearance" data-change>
                    Сохранить
                </button>
            </div>
        </section>
    </main>

    <script src="../scripts/common/preloader.js"></script>
    <script src="../scripts/accounts/show-select-status.js"></script>

    <script src="../scripts/ajax/all-variables.js"></script>
    <script src="../scripts/ajax/login/exit-user.js"></script>
    <script src="../scripts/ajax/admin/list-records.js"></script>
    <script src="../scripts/ajax/admin/filter-orders.js"></script>
    <script src="../scripts/ajax/admin/change-status.js"></script>
    <script src="../scripts/ajax/admin/list-filtered-records.js"></script>
    <script src="../scripts/ajax/admin/report.js"></script>
</body>
</html>