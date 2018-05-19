<!--先頭に戻るボタン-->
<p class="pagetop"><a href="#main"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/pagetop.png" width="60px" alt="PAGE TOP" /></a></p>

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
    <span id="copy">&copy;2018 Hito map, Yuki Hagiwara.</span>
</footer>


</main>
<!--            masonryの設定読み込む-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/common/masonry.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/common/app.js"></script>

<!-- writerページのやつ-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/about/lib/scrollmagic/uncompressed/ScrollMagic.js "></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/about/lib/scrollmagic/uncompressed/plugins/jquery.ScrollMagic.js "></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/about/js/script.js"></script>


<!--    ふわっと-->
<script type="text/javascript">
    $(document).ready(function() {
        $('.fuwat').css('visibility', 'hidden');
        $(window).scroll(function() {
            var windowHeight = $(window).height(),
                topWindow = $(window).scrollTop();
            $('.fuwat').each(function() {
                var objectPosition = $(this).offset().top;
                if (topWindow > objectPosition - windowHeight + 200) {
                    $(this).addClass("fuwatAnime");
                }
            });
        });
    });

</script>
</body>

</html>


<?php wp_footer(); ?>
