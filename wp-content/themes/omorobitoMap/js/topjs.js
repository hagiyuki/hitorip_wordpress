//pagetop
$(function () {
    var topBtn = $('.pagetop');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1000) {
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
