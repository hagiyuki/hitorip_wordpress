<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">



    <!--ここ以上も記述例-->

    <meta content="width=device-width,user-scalable=no" name="viewport">
    <meta content="omorobitomapの説明を入れる" name="description">
    <meta content="yuki" name="author">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Omorobito Map</title>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/common/css/reset.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/common/css/common.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/common/css/index2.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- ハンバーガーdrawew CSS がファイルの中にあるので読み込む -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css" rel="stylesheet">
    <!-- トップスライダー CSS 読み込む -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/common/js/jquery.bxslider/jquery.bxslider.css" />
    <!-- 文字の設定を読み込む -->
    <link href="https://fonts.googleapis.com/css?family=Averia+Libre" rel="stylesheet">
    <!-- jqueryのベースファイルをダウンロードして読み込む -->

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/common/js/jquery-3.3.1.min.js"></script>
    <!-- トップのboxslider -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/common/js/jquery.bxslider/jquery.bxslider.min.js"></script>


    <!-- ハンバーガーdrawewプラグイン -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js">


    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js">


    </script>

    <?php wp_head(); ?>
</head>

<div class="drawer drawer--right">
    <header role="banner">
        <button class="drawer-toggle drawer-hamburger" id="hamburger" type="button"><span class="sr-only">toggle navigation</span> <span class="drawer-hamburger-icon"></span></button>
        <nav class="drawer-nav" role="navigation">
            <!-- ここからドロップダウンの中身 -->
            <ul class="drawer-menu">
                <li>
                    <a class="drawer-menu-item" href="http://saica-news.tumblr.com/">About</a>
                </li>
                <li>
                    <a class="drawer-menu-item" href="http://tadanoenikki.jugem.jp/">People</a>
                </li>
                <li>
                    <a class="drawer-menu-item" href="profile.html">country</a>
                </li>
                <li>
                    <a class="drawer-menu-item" href="portfolio.html">Article</a>
                </li>
                <li>
                    <a class="drawer-menu-item" href="https://www.facebook.com/SaicaIllustration">contact</a>
                </li>
                <li>
                    <a class="drawer-menu-item" href="https://www.instagram.com/saica3131/">instagram</a>
                </li>
            </ul>
        </nav>
    </header>
</div>

<!--    <main role="main">-->
<!--PCのナビバー-->
<nav id="navbar">
    <ul class="menu">
        <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img alt="サイトlogo" height="65" src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/logo.gif" width="230"></a>
        </li>
        <li>
            <a class="navbarmain" href="<?php echo get_permalink(2253); ?>"><span class="navbarmain-main">About</span><span class="navbarmain-sub">サイトについて</span></a>
        </li>
        <li>
            <a class="navbarmain" href="/category-AllPeople/category-AllPeople.php"><span class="navbarmain-main">people</span><span class="navbarmain-sub">人を見る</span></a>
        </li>
        <li>
            <a class="navbarmain" href="profile.html"><span class="navbarmain-main">Area</span><span class="navbarmain-sub">エリアで見る</span></a>
        </li>
        <li>
            <a class="navbarmain" href="portfolio.html"><span class="navbarmain-main">Article</span><span class="navbarmain-sub">旅のお役立ち情報</span></a>
        </li>
        <li>
            <a class="navbarmain" href="portfolio.html"><span class="navbarmain-main">contact</span><span class="navbarmain-sub">お問合せ</span></a>
        </li>
        <!--                                    アイコン==-->
        <li>
            <a href="https://www.instagram.com/saica3131/"><i class="fab fa-facebook-square fa-2x"></i></a>
        </li>
        <li>
            <a href="https://www.instagram.com/saica3131/"><i class="fab fa-instagram fa-2x"></i></a>
        </li>
        <li>
            <a href="https://www.instagram.com/saica3131/"><i class="fab fa-twitter-square fa-2x"></i></a>
        </li>
    </ul>
</nav>
