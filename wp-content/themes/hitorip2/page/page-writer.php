<?php
/*
Template Name: 英語の紹介ペーじ
*/
?>


    <?php get_header(); ?>

    <main role="main">
        <!--        トップ写真スライド-->
        <div id="main">
            <div id="mainPhoto">
                <ul class="bxslider">
                    <li><img src="../common/images/maintop1.jpg" /></li>
                    <li><img src="../common/images/maintop2.jpg" /></li>
                    <li><img src="../common/images/maintop3.jpg" /></li>
                </ul>
            </div>
            <!-- mainPhoto end-->





            <!--            masonryの設定読み込む-->
            <script src="../common/js/masonry.pkgd.min.js"></script>
            <script src="../common/js/app.js"></script>



            <!--        記事のエリアれん州-->
            <div>
                <h2>Auther<i class="fas fa-pencil-alt"></i>
                    <span class="title-sub">この記事を書いてる人</span></h2>
                <img src="../common/images/line.png" id="line" width="400px">
            </div>
            <ul>
                <li>
                    <h3>Yuki Hagiwara</h3>
                    <p><img src="images/writer1.png" width="250"></p>
                    <p>ああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                </li>

                Yuki Hagiwara
                <li>
                    <h3>Yuki Hagiwara</h3>
                    <p><img src="images/writer1.png" width="250"></p>
                    <p>ああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                </li>

            </ul>
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

    </main>
    </body>

    </html>
