<!DOCTYPE html>
<html lang="ja">

    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width,user-scalable=no" name="viewport">
    <meta content="omorobitomapの説明を入れる" name="description">
    <meta content="yuki" name="author">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Omorobito Map</title>
    <link href="css/common/reset.css" rel="stylesheet">
    <link href="css/common/common.css" rel="stylesheet">
    <link href="css/common/home.css" rel="stylesheet">
    <link href="css/category/category.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- ハンバーガーdrawew CSS がファイルの中にあるので読み込む -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css" rel="stylesheet">
    <!-- トップスライダー CSS 読み込む -->
    <link rel="stylesheet" href="js/common/jquery.bxslider/jquery.bxslider.css" />
    <!-- 文字の設定を読み込む -->
    <link href="https://fonts.googleapis.com/css?family=Averia+Libre" rel="stylesheet">
    <!-- jqueryのベースファイルをダウンロードして読み込む -->

    <script src="/js/common/jquery-3.3.1.min.js"></script>
    <!-- トップのboxslider -->
    <script src="js/common/jquery.bxslider/jquery.bxslider.min.js"></script>


    <!-- ハンバーガーdrawewプラグイン -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js">
    </script>

</head>
<!-- lightboxのjquery -->
<!--.drawer ハンバーガー -->
<!--.drawer モバイルハンバーガーメニュー -->

<body class="drawer drawer--right">
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
    <!--    <main role="main">-->
    <!--PCのナビバー-->
    <nav id="navbar">
        <ul class="menu">
            <li id="logo">
                <a href="index.html"><img alt="omorobitomap_logo"src="images/common/logo9.gif" width="150px"></a>
            </li>
            <li>
                <a class="navbarmain" href="/../about/about.html"><span class="navbarmain-main">About</span><span class="navbarmain-sub">サイトについて</span></a>
            </li>
            <li>
                <a class="navbarmain" href="../category/category-AllPeople.html"><span class="navbarmain-main">people</span><span class="navbarmain-sub">人を見る</span></a>
            </li>
            <li>
                <a class="navbarmain" href="profile.html"><span class="navbarmain-main">Area</span><span class="navbarmain-sub">エリアで見る</span></a>
            </li>
            <li>
                <a class="navbarmain" href="../single-ArticleEnglish/.html"><span class="navbarmain-main">Article</span><span class="navbarmain-sub">旅のお役立ち情報</span></a>
            </li>
            <li>
                <a class="navbarmain" href="portfolio.html"><span class="navbarmain-main">contact</span><span class="navbarmain-sub">お問合せ</span></a>
            </li>
            <!--                                    アイコン==-->
            <li>
                <a href="https://www.instagram.com/saica3131/"><i class="fab fa-facebook-square fa-lg"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/saica3131/"><i class="fab fa-instagram fa-lg"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/saica3131/"><i class="fab fa-twitter-square fa-lg"></i></a>
            </li>
        </ul>
    </nav>
    <main role="main">
        <!--        <div id="main">-->

        <!--エリアタブ表示-->
        <div class="tabtab">
            <ul class="tab-menu">
                <li class="now">ALL<span class="tab-sub">全て見る</span></li>
                <li><a href="category-southAmerica.html">South America<span class="tab-sub">南米</span></a></li>
                <li>Europe<span class="tab-sub">ヨーロッパ</span></li>
                <li tabindex="0">Africa<span class="tab-sub">アフリカ</span></li>
                <li tabindex="0">Asia<span class="tab-sub">アジア</span></li>
            </ul>
            <div class="tab-content">
                なんか入れる！！
                <div>
                    <!--<人の紹介ブロック＞-->
                    <div>
                        <h2>People<i class="fas fa-user"></i>
                            <span class="title-sub">人を見る</span></h2>
                        <img src="images/common/line.png" class="line" width="350px">
                    </div>
                    <!--記事風に写真表示-->
                    <div class="container_box">
                        <div id="content" class="clearfix">
                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep7.jpg" width="500px" height="100px" >
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title0</h2>
                                        <span class="item-label">city</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing.
                                    </div>
                                </div>
                            </article>


                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep2.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title1</h2>
                                        <span class="item-label">nature</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus.
                                    </div>
                                </div>
                            </article>


                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep9.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title2</h2>
                                        <span class="item-label">animals</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </div>
                                </div>
                            </article>


                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep4.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title3</h2>
                                        <span class="item-label">nature</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus.
                                    </div>
                                </div>
                            </article>


                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep5.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title4</h2>
                                        <span class="item-label">city</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                </div>
                            </article>


                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep13.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title5</h2>
                                        <span class="item-label">nature</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus.
                                    </div>
                                </div>
                            </article>


                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep7.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title6</h2>
                                        <span class="item-label">animals</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </div>
                                </div>
                            </article>


                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep8.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title7</h2>
                                        <span class="item-label">food</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing.
                                    </div>
                                </div>
                            </article>


                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep9.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title8</h2>
                                        <span class="item-label">city</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                </div>
                            </article>


                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep11.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title9</h2>
                                        <span class="item-label">animals</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </div>
                                </div>
                            </article>

                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep12.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title10</h2>
                                        <span class="item-label">animals</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <a class="item-image" href="#">
                                            <img src="images/common/slidep2.jpg">
                                        </a>
                                <div class="item-detail">
                                    <div class="item-heading clearfix">
                                        <h2 class="item-title">Title10</h2>
                                        <span class="item-label">animals</span>
                                    </div>
                                    <div class="item-description">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </div>
                                </div>
                            </article>

                        </div>

                    </div>



                </div>
            </div>


            <!--タブ表示終了-->










            <!--先頭に戻るボタン-->
            <p class="pagetop"><a href="#main"><img src="images/common/pagetop.png" width="60px" alt="PAGE TOP" /></a></p>
        </div>
        <footer>
            <nav id="navbar_footer">
                <ul class="navbarmain__menu">
                    <li>
                        <a class="navbarmain" href="http://saica-news.tumblr.com/"><span class="navbarmain-m５ain">About</span></a>
                    </li>
                    <li>
                        <a class="navbarmain" href="http://tadanoenikki.jugem.jp/"><span class="navbarmain-main">people</span></a>
                    </li>
                    <li>
                        <a class="navbarmain" href="profile.html"><span class="navbarmain-main">Area</span></a>
                    </li>
                    <li>
                        <a class="navbarmain" href="portfolio.html"><span class="navbarmain-main">Article</span></a>
                    </li>
                    <li>
                        <a class="navbarmain" href="portfolio.html"><span class="navbarmain-main">contact</span></a>
                    </li>
                </ul>

                <ul class="navbarmain__sns">
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
            <span id="copy">&copy;2018 Hito map, Yuki Hagiwara.</span>
        </footer>



        <!--            masonryの設定読み込む-->
        <script src="js/common/masonry.pkgd.min.js"></script>
        <script src="js/common/app.js"></script>
    </main>
</body>

</html>
