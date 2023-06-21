<?php
// Определите заголовок текущей страницы
$pageTitle = "Главная страница";
$pageDescript = "Мы компания, специализирующаяся на продвижении бизнеса в интернете. 
Наша цель - помочь клиентам достичь бизнес-успеха в онлайн-мире. Мы предлагаем профессиональные услуги по SEO оптимизации,
 контекстной рекламе, социальному медиа-маркетингу и другим видам цифрового маркетинга.
  С нашим опытом и экспертизой, мы разрабатываем индивидуальные  стратегии для каждого клиента, 
  гарантируя результативность и рост их бизнеса.
Обращайтесь к нам для эффективного продвижения вашего бизнеса в онлайн-мире.";

// Проверка, если открыта другая страница, измените заголовок соответственно
if ($_SERVER['REQUEST_URI'] === '/about.php') {
    $pageTitle = "О нас";
    $pageDescript = "В разделе описания нашего сайта вы найдете подробную информацию о нашей компании, специализации и услугах.
     Мы являемся экспертами в области цифрового маркетинга и предлагаем комплексные решения по SEO оптимизации, 
    контекстной рекламе, социальному медиа-маркетингу и другим стратегиям продвижения бизнеса в интернете.";
} elseif ($_SERVER['REQUEST_URI'] === '/web_dew.php') {
    $pageTitle = "Разработка сайтов";
} elseif ($_SERVER['REQUEST_URI'] === '/seo.php') {
    $pageTitle = "SEO-оптимизация и продвижение";
} elseif ($_SERVER['REQUEST_URI'] === '/smm.php') {
    $pageTitle = "SMM-продвижение";
} elseif ($_SERVER['REQUEST_URI'] === '/contact.php') {
    $pageTitle = "Оставть отзыв";
} elseif ($_SERVER['REQUEST_URI'] === '/faq.php') {
    $pageTitle = "Частые вопросы";
} else {
    $pageTitle = "Главная страница";
    $pageDescript = "Мы компания, специализирующаяся на продвижении бизнеса в интернете. 
Наша цель - помочь клиентам достичь бизнес-успеха в онлайн-мире. Мы предлагаем профессиональные услуги по SEO оптимизации,
 контекстной рекламе, социальному медиа-маркетингу и другим видам цифрового маркетинга.
  С нашим опытом и экспертизой, мы разрабатываем индивидуальные  стратегии для каждого клиента, 
  гарантируя результативность и рост их бизнеса.
Обращайтесь к нам для эффективного продвижения вашего бизнеса в онлайн-мире.";
}


// Вывод заголовка страницы в теге <title>

?>

<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MaxVel-
        <? echo $pageTitle ?>
    </title>
    <meta name="description" content="<? echo $pageDescript ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Главная</a></li>
                                            <li><a href="about.php">О нас</a></li>
                                            <li><a href="#">Наши услуги <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="web_dew.php">Разработка cайтов </a></li>
                                                    <li><a href="seo.php">SEO оптимизация </a></li>
                                                    <li><a href="smm.php">CMM Продвижение</a></li>
                                                    <li><a href="consalt.php">Консультация</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#">Наши проекты<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="web_project.php">Выполненые</a></li>
                                                    <li><a href="#">В работе</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>