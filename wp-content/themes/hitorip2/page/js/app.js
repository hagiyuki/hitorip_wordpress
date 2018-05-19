//masonryの設定
;
(function () {

    var $content = $('#content');
    var masonry = new Masonry($content[0], {
        itemSelector: '.item',
        transitionDuration: '0.3s'
    });

    // $content内の画像の読み込みが完了した際に都度レイアウトの再計算を行う
    imgOnLoad($content, resize);

    function resize() {
        masonry.layout();
    }

    function imgOnLoad(target, callback) {
        // target内にあるimgタグを全て取得する
        var $images = target.find('img');

        // imgタグの数だけループを実行
        $images.each(function () {

            // imgタグの読み込みが完了している場合はここで処理をスキップする
            if (this.complete) {
                return;
            }

            // imgタグの読み込みが未完了の場合は読み込み完了時にcallbackを実行させる
            var $self = $(this);
            $self.on('load', function () {
                $self.off("load"); // imgタグにつけたloadイベントを削除

                if (callback) {
                    // callback関数が渡されていればcallbackを実行
                    callback();
                }
            });
        });
    }
})();

//ハンバーガー

jQuery(document).ready(function ($) {
    $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
    });

    $('.showOlderChanges').on('click', function (e) {
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
    })
});

$(document).ready(function () {
    $('.drawer').drawer();
});


//ボックススライダー
$(document).ready(function () {
    $('.bxslider').bxSlider({
        mode: 'fade',
        auto: true,
        autoControls: false,
        controls: false,
        pager: false,
        autoDelay: 2000,
        pause: 7000
    });
});



//<!--   ページトップへ戻る矢印-->
//pagetop
$(function () {
    var topBtn = $('.pagetop');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1500) {
            //ボタンの表示方法
            topBtn.fadeIn();
        } else {
            //ボタンの非表示方法
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,  html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
