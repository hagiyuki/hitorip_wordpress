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
    <link href="css/single-colombia/single.css" rel="stylesheet">
    <!--    swiperのCSS-->
    <link rel="stylesheet" href="js/category/dist/css/swiper.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- ハンバーガーdrawew CSS がファイルの中にあるので読み込む -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css" rel="stylesheet">
    <!-- トップスライダー CSS 読み込む -->
    <link rel="stylesheet" href="js/common/jquery.bxslider/jquery.bxslider.css" />
    <!-- 文字の設定を読み込む -->
    <link href="https://fonts.googleapis.com/css?family=Averia+Libre" rel="stylesheet">
    <!-- jqueryのベースファイルをダウンロードして読み込む -->

    <script src="js/common/jquery-3.3.1.min.js"></script>
    <!-- トップのboxslider -->
    <script src="js/common/jquery.bxslider/jquery.bxslider.min.js"></script>

    <!-- Swiper JS -->
    <script src="js/category/dist/js/swiper.min.js"></script>

    <!--    地図-->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

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
    <!-- lightboxのjquery -->
    <!--.drawer ハンバーガー -->
    <!--.drawer モバイルハンバーガーメニュー -->

    <body class="drawer drawer--right" onload="initialize();">
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
                    <a href="index.html"><img alt="omorobitomap_logo"src="../common/images/logo9.gif" width="150px"></a>
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
            <!--        トップ写真スライド-->
            <section id="single_main">
                <img src="images/single-colombia/colombia_single5.jpg" height="500px" />
                <article id="single_back">
                    <div id="single_text">
                        <h2>Colombia</h2>
                        <h3>サレントのコーヒー屋のおばちゃん<br>in コロンビア</h3>
                        <p>旅行をすると出会う素敵な景色、美味しいご飯に可愛い雑貨。 <br>どれもgoodな経験なんだけど、なんだかちょっと物足りなくなってきた。</p>
                        <p>そんなあなたに、新しい旅のご提案。</p>
                        <p>ちょっとの勇気が必要ですが、そこに住む人達の生活をのぞいてみませんか。</p>
                        <p>そこにはあなたの知らないおもしろい人が待っているかもしれません。</p>
                    </div>
                </article>
            </section>

            <!-- mainPhoto end-->
            <article id="single_article">
                <section class="box">
                    <div class="img_photo">
                        <img src="images/single-colombia/colombia_single1.jpg">
                    </div>
                    <div class="text_box">
                        <h4>コーヒーの街サレント。カラフルな街並みです。</h4>
                        <p>旅行をすると出会う素敵な景色、美味しいご飯に可愛い雑貨。 <br>どれもgoodな経験なんだけど、なんだかちょっと物足りなくなってきた。</p>
                        <p>そんなあなたに、新しい旅のご提案。</p>
                        <p>ちょっとの勇気が必要ですが、そこに住む人達の生活をのぞいてみませんか。</p>
                        <p>そこにはあなたの知らないおもしろい人が待っているかもしれません。</p>
                    </div>
                </section>

                <section class="box">
                    <div class="img_photo">
                        <img src="images/single-colombia/colombia_single2.jpg">
                    </div>
                    <div class="text_box_second">
                        <h4>言葉は通じないけどひたすら笑ってるおばちゃんがいました</h4>
                        <p>旅行をすると出会う素敵な景色、美味しいご飯に可愛い雑貨。 <br>どれもgoodな経験なんだけど、なんだかちょっと物足りなくなってきた。</p>
                        <p>そんなあなたに、新しい旅のご提案。</p>
                        <p>ちょっとの勇気が必要ですが、そこに住む人達の生活をのぞいてみませんか。</p>
                        <p>そこにはあなたの知らないおもしろい人が待っているかもしれません。</p>
                    </div>
                </section>
                <section class="box">
                    <div class="img_photo">
                        <img src="images/single-colombia/colombia_single4.jpg">
                    </div>
                    <div class="text_box">
                        <h4>販売しているカップがレトロで可愛かった。</h4>
                        <p>旅行をすると出会う素敵な景色、美味しいご飯に可愛い雑貨。 <br>どれもgoodな経験なんだけど、なんだかちょっと物足りなくなってきた。</p>
                        <p>そんなあなたに、新しい旅のご提案。</p>
                        <p>ちょっとの勇気が必要ですが、そこに住む人達の生活をのぞいてみませんか。</p>
                        <p>そこにはあなたの知らないおもしろい人が待っているかもしれません。</p>
                    </div>
                </section>
                <section class="box">
                    <div class="img_photo">
                        <img src="images/single-colombia/colombia_single6.jpg">
                    </div>
                    <div class="text_box_second">
                        <h4>コーヒーにクッキーも着けてくれました。</h4>
                        <p>旅行をすると出会う素敵な景色、美味しいご飯に可愛い雑貨。 <br>どれもgoodな経験なんだけど、なんだかちょっと物足りなくなってきた。</p>
                        <p>そんなあなたに、新しい旅のご提案。</p>
                        <p>ちょっとの勇気が必要ですが、そこに住む人達の生活をのぞいてみませんか。</p>
                        <p>そこにはあなたの知らないおもしろい人が待っているかもしれません。</p>
                    </div>
                </section>

                <a class="more" href="../page-prSouthAmerica/page-prSouthAmerica.html">
                このエリアの情報をのぞいてみる</a>
            </article>
            <!--エリア情報-->
            <article id="area_info">
                <section class="text_info">
                    <h4>About Colombia</h4>
                    <img src="images/single-colombia/flag_colo.png">
                </section>



                <!-- Swiperの設定 -->
                <div class="swiper-container">
                    <!--        <div class="parallax-bg" style="background-image:url(http://lorempixel.com/900/600/nightlife/2/)" data-swiper-parallax="-23%"></div>-->
                    <div class="parallax-bg" data-swiper-parallax="-23%"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/single-colombia/colomp1.jpg" height="300px" class="slidp" />
                            <div class="text" data-swiper-parallax="-100">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/single-colombia/colomp2.jpg" height="300px" class="slidp" />
                            <div class="text" data-swiper-parallax="-100">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/single-colombia/colomp3.jpg" height="300px" class="slidp" />
                            <div class="text" data-swiper-parallax="-100">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/single-colombia/colomp4.jpg" height="300px" class="slidp" />
                            <div class="text" data-swiper-parallax="-100">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/single-colombia/colomp5.jpg" height="300px" class="slidp" />
                            <div class="text" data-swiper-parallax="-100">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-white"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>

                <section class="text_info">
                    <h4>Map</h4>
                    <div class="wrap_info">
                        <!--                    <h1>地図で見るコロンビア</h1>-->
                    </div>
                </section>
                <div id="map_custmomize" style="width:100%;"></div>
            </article>

            <!--            地図-->







            <div>
                <h2 class="title_long">people of South America<i class="fas fa-user"></i>
                    <span class="title-sub">南米エリアの人を見る</span></h2>
                <img src="../common/images/line.png" class="line" width="350px">
            </div>


            <!--記事風に写真表示-->
            <div id="container">

                <div id="content" class="clearfix">


                    <article class="item">
                        <a class="item-image" href="../single-Ecuador/single-Ecuador.html">
                           
                            <img src="../common/images/slidep7.jpg" width="500px" height="100px" >
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
                            <img src="../common/images/slidep2.jpg">
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
                            <img src="images/slidep9.jpg">
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
                            <img src="images/slidep4.jpg">
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
                            <img src="images/slidep5.jpg">
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
                            <img src="images/slidep2.jpg">
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


            <!--            masonryの設定読み込む-->
            <script src="js/common/masonry.pkgd.min.js"></script>
            <script src="js/common/app.js"></script>



            <!--先頭に戻るボタン-->
            <p class="pagetop"><a href="#main"><img src="../common/images/pagetop.png" width="60px" alt="PAGE TOP" /></a></p>

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
                <span id="copy">&copy;2018 Hitorip, Yuki Hagiwara.</span>
            </footer>
        </main>
    </body>

</html>
