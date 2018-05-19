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
    <link href="css/single-ArticleEnglish/single-Article.css" rel="stylesheet">
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

    <script src="/js/common/jquery-3.3.1.min.js"></script>
    <!-- トップのboxslider -->
    <script src="js/common/jquery.bxslider/jquery.bxslider.min.js"></script>

    <!-- Swiper JS -->
    <script src="js/category/dist/js/swiper.min.js"></script>

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
        <div id="main">
            <section id="single_main">
                <img src="images/single-ArticleEnglish/article2.jpg" />
                <article id="single_back">
                    <div id="single_text">
                        <h2>About English</h2>
                        <h3>英語はどれくらい勉強したの？</h3>
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
                        <img src="images/single-ArticleEnglish/how1.jpg" width="500px">
                    </div>
                    <div class="text_box">
                        <h4>英語はどれくらい勉強したの。カラフルな街並みです。</h4>
                        <p>旅行をすると出会う素敵な景色、美味しいご飯に可愛い雑貨。 <br>どれもgoodな経験なんだけど、なんだかちょっと物足りなくなってきた。</p>
                        <p>そんなあなたに、新しい旅のご提案。</p>
                        <p>ちょっとの勇気が必要ですが、そこに住む人達の生活をのぞいてみませんか。</p>
                        <p>そこにはあなたの知らないおもしろい人が待っているかもしれません。</p>
                    </div>
                </section>

                <section class="box">
                    <div class="img_photo">
                        <img src="images/single-ArticleEnglish/how2.jpg" width="500px">
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
                        <img src="images/single-ArticleEnglish/how3.jpg" width="500px">
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
                        <img src="images/single-ArticleEnglish/how4.jpg" width="500px">
                    </div>
                    <div class="text_box_second">
                        <h4>コーヒーにクッキーも着けてくれました。</h4>
                        <p>旅行をすると出会う素敵な景色、美味しいご飯に可愛い雑貨。 <br>どれもgoodな経験なんだけど、なんだかちょっと物足りなくなってきた。</p>
                        <p>そんなあなたに、新しい旅のご提案。</p>
                        <p>ちょっとの勇気が必要ですが、そこに住む人達の生活をのぞいてみませんか。</p>
                        <p>そこにはあなたの知らないおもしろい人が待っているかもしれません。</p>
                    </div>
                </section>
            </article>






            <!--        記事のエリア-->
            <div>
                <h2>Article<i class="fas fa-pencil-alt"></i>
                    <span class="title-sub">関連記事はこちら</span></h2>
                <img src="../common/images/line.png" class="line" width="350px">
            </div>

            <div id="contents" class="media">
                <div class="inner">
                    <ul class="media-container clearfix">

                        <li class="media-list media-hover-04">
                            <a href="#" class="media-link">
                            <img src="images/article1.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">お金</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                        </li>
                        <li class="media-list media-hover-04">
                            <a href="#" class="media-link">
                            <img src="images/article4.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">勉強</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                        </li>
                        <li class="media-list media-hover-04">
                            <a href="#" class="media-link">
                            <img src="images/article5.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                        </li>
                        <li class="media-list media-hover-04">
                            <a href="#" class="media-link">
                            <img src="images/article5.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                        </li>
                        <li class="media-list media-hover-04">
                            <a href="#" class="media-link">
                            <img src="images/single-ArticleEnglish/article8.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                        </li>
                    </ul>
                    <div class="more"><a href="../archive-article/archive-article.html">read more</a></div>
                </div>
            </div>
        </div>

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
            <span id="copy">&copy;2018 Hito map, Yuki Hagiwara.</span>
        </footer>
        <!--            masonryの設定読み込む-->
        <script src="js/common/masonry.pkgd.min.js"></script>
        <script src="js/common/app.js"></script>
    </main>
</body>

</html>
