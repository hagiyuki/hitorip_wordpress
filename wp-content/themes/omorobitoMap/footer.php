<footer>
    <nav class="gnav">
        <ul class="clearfix multiple-items">
            <li><a href="<?php echo esc_url(home_url('/'));?>"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav01_home.png" alt="ホーム"></a></li>
            <li><a href="/introduction/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav02_introduction.png" alt="イントロダクション"></a></li>
            <li><a href="/story1/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav03_story.png" alt="ストーリー"></a></li>
            <li><a href="/character/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav04_cast.png" alt="登場人物"></a></li>
            <li><a href="/cast/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav05_maincast.png" alt="主演女優"></a></li>
            <li><a href="/staff/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav06_staff.png" alt="監督・スタッフ"></a></li>
            <li><a href="/information/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav07_theater.png" alt="上演情報"></a></li>
            <li><a href="/gallery/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav08_gallery.png" alt="ギャラリー"></a></li>
            <li><a href="/movie/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav09_yokoku.png" alt="予告"></a></li>
            <li><a href="/contact/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav10_contact.png" alt="お問い合わせ"></a></li>
            <li><a href="/link/"><img  class="jrumble" src="<?php echo get_template_directory_uri(); ?>/img/gnav11_links.png" alt="リンク"></a></li>
        </ul>
    </nav>
    <p id="pagetop"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/btn_pagetop.png" alt="ページの上へ戻る"></a></p>
    <p id="copyright">&copy; 2015 「愛のレシピ」製作委員会／Double Bear Film. All Rights Reserved.</p>
</footer>
<?php wp_footer(); ?>
<!--共通JSここから-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jrumble.1.3.min.js"></script>
<?php if(is_page('information')): ?>
<script src="//maps.google.com/maps/api/js?sensor=false&region=JP"></script>
<?php endif; ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<?php if(is_front_page()): ?>
<!--ホーム用JSここから-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maximage.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jqfloat.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/snowfall.jquery.js"></script>
<script>
    $(function() {
        $('#maximage').maximage();
        $('.fuwafuwa').jqFloat({
            width: 50,
            height: 150,
            speed: 2500
        });
        $(document).snowfall({
            flakeColor: "#ffffff", //色を指定
            round: true, //丸くする、丸が嫌ならfalseを入れる
            shadow: true, //影をつける、影を付けたければtrueを入れる
            minSize: 1, //好みで最小の大きさを指定
            maxSize: 6, //好みで最大の大きさを指定
            flakeCount: 50, //表示数
            minspeed: 1, //最小落下速度
            maxSpeed: 3
        });

        //リサイズ完了後
        var timer = false;
        var w = $(window).width();
        if (w >= 768) {
            $(window).on('orientationchange resize', function() {
                if (timer !== false) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function() {
                    location.reload();
                }, 200);
            });
        }

    });

</script>
<!--ホーム用JSここまで-->
<?php endif; ?>
<?php $imageurl = get_field('maximage');
if((is_page()) && ($imageurl != '')): ?>
<!--全画面ページ用JSここから-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maximage.min.js"></script>
<?php if(is_page('contact')): ?>
<script>
    $(function() {
        //リサイズ完了後
        var timer = false;
        var w = $(window).width();
        $('#maximage').maximage();
        if (w >= 768) {
            $(window).on('orientationchange resize', function() {
                if (timer !== false) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function() {
                    location.reload();
                }, 200);
            });
        }
        //768pxより小さいなら、maxImageの横位置を調整
        if (w < 768) {
            $('div.mc-image').css({
                'background-position': 81 + '% center'
            });
        }
        if ((w >= 768) && (w < 960)) {
            $('div.mc-image').css({
                'background-position': 40 + '% center'
            });
        }

    });

</script>
<?php else: ?>
<script>
    $(function() {
        //リサイズ完了後
        var timer = false;
        var w = $(window).width();
        if (w >= 768) {
            $(window).on('orientationchange resize', function() {
                if (timer !== false) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function() {
                    location.reload();
                }, 200);
            });
        }
        //768pxより小さいなら、maxImageの高さを半分に
        if (w < 768) {
            $('#maximage').width('100%');
        }
        //768px以上なら、mainの高さをwindowからheaderとfooterを引いた値に
        if (w >= 768) {
            $('#maximage').maximage();
            var mainH = $(window).height() - $('header').height() - $('.gnav').height();
            $('main').css({
                'height': mainH
            });
        }
    });

</script>
<?php endif; ?>
<!--全画面ページ用JSここまで-->
<?php endif; ?>
</body>

</html>
