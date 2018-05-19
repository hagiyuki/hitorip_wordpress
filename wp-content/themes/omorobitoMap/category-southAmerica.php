<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,user-scalable=no" name="viewport">
    <meta content="omorobitomapの説明を入れる" name="description">
    <meta content="yuki" name="author">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Omorobito Map</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">

    <!-- 記事用のスクリプト -->
    <!--    <script src="js/script.js"></script>-->

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- ハンバーガーdrawew CSS がファイルの中にあるので読み込む -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css" rel="stylesheet">
    <!-- lightboxの CSS 読み込む -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.min.css" rel="stylesheet">
    <!-- 文字の設定を読み込む -->
    <link href="https://fonts.googleapis.com/css?family=Averia+Libre" rel="stylesheet">
    <!-- jqueryのベースファイルをダウンロードして読み込む -->

    <script src="js/jquery-3.3.1.min.js">
    </script>
    <!-- lightboxのプラグイン -->

    <script>
        src = "https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox.min.js"
        integrity = "sha256-9r7DHolfe5aoH+bUj4FEqRBq2tmaIXBxOYUZFalCjSE="
        crossorigin = "anonymous" >
    </script>

    <script>
        //pagetop
        $(function() {
            var topBtn = $('.pagetop');
            topBtn.hide();
            //スクロールが100に達したらボタン表示
            $(window).scroll(function() {
                if ($(this).scrollTop() > 1500) {
                    //ボタンの表示方法
                    topBtn.fadeIn();
                } else {
                    //ボタンの非表示方法
                    topBtn.fadeOut();
                }
            });
            //スクロールしてトップ
            topBtn.click(function() {
                $('body,  html').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        });
    </script>




    <!-- ハンバーガーdrawewプラグイン -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <script>
        jQuery(document).ready(function($) {
            $('a').smoothScroll({
                speed: 1000,
                easing: 'easeInOutCubic'
            });

            $('.showOlderChanges').on('click', function(e) {
                $('.changelog .old').slideDown('slow');
                $(this).fadeOut();
                e.preventDefault();
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.drawer').drawer();
        });
    </script>
</head>
<!-- lightboxのjquery -->
<!--.drawer ハンバーガー -->
<!--.drawer モバイルハンバーガーメニュー -->

<body class="drawer drawer--right">
    <header role="banner">
        <button class="drawer-toggle drawer-hamburger" type="button"><span class="sr-only">toggle navigation</span> <span class="drawer-hamburger-icon"></span></button>
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
    <main role="main">
        <!--PCのナビバー-->
        <nav id="navbar">
            <ul class="menu">
                <li>
                    <a href="http://saicololo.com/"><img alt="omorobitomap_logo" height="65" src="images/logo.gif" width="230"></a>
                </li>
                <li>
                    <a class="navbarmain" href="http://saica-news.tumblr.com/"><span class="navbarmain-main">About</span><span class="navbarmain-sub">サイトについて</span></a>
                </li>
                <li>
                    <a class="navbarmain" href="http://tadanoenikki.jugem.jp/"><span class="navbarmain-main">people</span><span class="navbarmain-sub">人を見る</span></a>
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
        <!--       メインコンテンツ-->
        <section>
            <div>
                <img alt="メインイメージ" id="topphoto" src="images/maintop.jpg"> </div>


            <h1>旅の出会いはあなたの旅を100倍楽しくする。</h1>
            <!--            <div>旅行をすると出会う素敵な景色、美味しいご飯に可愛い雑貨。 <br>どれもgoodな経験なんだけど、なんだかちょっと物足りなくなってきた。 そんなあなたに、新しい旅のご提案。 ちょっと緊張するけれど、そこに住む人達の生活をのぞいてみませんか。 そこにはあなたの知らないおもしろい人が待っているかもしれません。</div>-->

        </section>


        <!--地図エリア-->
        <section>
            <div>
                <h2>Area<i class="far fa-map"></i>
                    <span class="title-sub">エリアで人を見つける</span></h2>
                <img src="images/line.png" id="line" width="400px">
            </div>
            <p class="bigmap"> <img src="images/map1.jpg" alt="大きい地図" usemap="#Map">
                <map name="Map">
                <area shape="circle" coords="300,416,76" href="nanbei.html">
                <area shape="circle" coords="444,174,82" href="euro.html">
                <area shape="circle" coords="320,250,71" href="africa.html">
                <area shape="circle" coords="650,261,93" href="asia.html">
                <area shape="circle" coords="852,446,111" href="oceania.html">
                </map></p>
        </section>
        <!--        記事のエリアれん州-->
        <div>
            <h2>Article<i class="fas fa-paperclip"></i>
                <span class="title-sub">旅のお役立ち情報</span></h2>
            <img src="images/line.png" id="line" width="400px">
        </div>

        <div id="contents" class="media">
            <div class="inner">
                <ul class="media-container clearfix">
                    <li class="media-list media-hover-04">
                        <a href="#" class="media-link">
                            <img src="images/article10.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                    </li>
                    <li class="media-list media-hover-04">
                        <a href="#" class="media-link">
                            <img src="images/article1.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                    </li>
                    <li class="media-list media-hover-04">
                        <a href="#" class="media-link">
                            <img src="images/article2.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                    </li>
                    <li class="media-list media-hover-04">
                        <a href="#" class="media-link">
                            <img src="images/article3.jpg" width="300px" height="auto" alt="">
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
                            <img src="images/article8.jpg" width="300px" height="auto" alt="">
                            <div class="lower-box">
                                <span class="tag tag-media">メディア</span>
                                <date class="date">2015 5-15</date>
                                <p class="title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="more"><a href="#">read more</a></div>
            </div>
        </div>


        <!--先頭に戻るボタン-->
        <p class="pagetop"><a href="#container"><img src="images/pagetop.png" width="60px" alt="PAGE TOP" /></a></p>

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
    </main>
</body>

</html>
