(function () {
    // init controller
    var controller = new ScrollMagic.Controller();

    var $window = $(window);
    var winW = $window.width();
    var winH = $window.height();

    var $pageList = $('.pagination-list');
    var $pageLink = $('.pagination-link');

    var $title = $('#js-title');
    var $leftImage = $('#js-left-figure');
    var $rightImage = $('#js-right-figure');
    var $asideBlock = $('.aside-block');
    var $asideTitle01 = $('#js-aside-title01');
    var $asideTitle02 = $('#js-aside-title02');
    var $asideBody01 = $('#js-aside-body01');
    var $asideBody02 = $('#js-aside-body02');
    var $section01 = $('#js-section01');
    var $section02 = $('#js-section02');
    var $section03 = $('#js-section03');
    var $section04 = $('#js-section04');
    var $section04BoxRed = $('#js-section04 .box-red');
    var $section04BoxGreen = $('#js-section04 .box-green');
    var $section04BoxBlue = $('#js-section04 .box-Blue');
    var $section05 = $('#js-section05');
    var $section06 = $('#js-section06');
    var $section07 = $('#js-section07');
    var $section08 = $('#js-section08');

    var scene01 = null;
    var scene02 = null;
    var scene03 = null;
    var scene04 = null;
    var scene05 = null;

    var sceneResetFlg = false;

    //pagination 処理
    $pageList.on('click', function (e) {
        e.preventDefault(); //伝播を止める

        var $this = $(this); //クリックした要素を取得
        var href = $this.find('a').attr('href'); //クリックした要素のhrefを取得	
        var target = $(href); //jQueryオブジェクトとして格納
        var offset = target.offset().top; //ページ上部からの位置をを取得
        $('body').animate({
            scrollTop: offset
        }, 1000); //アニメーションしながらスクロール
    });

    /** イベント付与 **/
    $window.on('load', loadEvent);
    $window.on('resize', resizeEvent);

    /** load時に呼び出す関数 **/
    function loadEvent() {
        resizeEvent(); //load時に1度だけresizeEventを呼ぶ
    }


    /** resize時に呼び出す関数 **/
    function resizeEvent() {
        winW = $window.width(); //windowの横幅を取得、グローバルに格納
        winH = $window.height(); //windowの縦幅を取得、グローバルに格納

        $section01.css({
            'height': winH
        }); //section01の縦幅をwindowに合わせる
        $section04.css({
            'height': winH
        });

        if (sceneResetFlg) {
            scene01.destroy(true);
            scene02.destroy(true);
            scene03.destroy(true);
            scene04.destroy(true);
            scene05.destroy(true);
        }

        /** section01 **/
        scene01 = new ScrollMagic.Scene({
                triggerElement: "#js-section01",
                triggerHook: 'onCenter',
                duration: (winH / 2)
            })
            .offset(winH / 2)
            .on('progress', function (e) {
                var prog = e.progress;
                $title.css({
                    transform: 'translateY(' + prog * (winH / 2) + 'px)',
                    opacity: 1 - prog
                });
            })
            .setClassToggle($pageList.eq(0), "current")
            .addIndicators({
                name: 'section01'
            }) // add indicators (requires plugin)
            .addTo(controller);

        /** section02 **/
        scene02 = new ScrollMagic.Scene({
                triggerElement: "#js-section02",
                triggerHook: 'onCenter',
                duration: 300
            })
            .on('progress', function (e) {
                var prog = e.progress;
                $leftImage.css({
                    'opacity': 0.2 + (prog * 0.8)
                });
                $asideTitle01.css({
                    'transform': 'translateX(' + -(prog * 300) + 'px)',
                    'opacity': prog
                });
                $asideBody01.css({
                    'transform': 'translateX(' + -(prog * 200) + 'px)',
                    'opacity': prog
                });
            })
            .setClassToggle($pageList.eq(1), "current")
            .addIndicators({
                name: 'section02'
            }) // add indicators (requires plugin)
            .addTo(controller);

        /** section03 **/
        scene03 = new ScrollMagic.Scene({
                triggerElement: "#js-section03",
                triggerHook: 'onCenter',
                duration: 300
            })
            .on('progress', function (e) {
                var prog = e.progress;
                $rightImage.css({
                    'opacity': 0.2 + (prog * 0.8)
                });
                $asideTitle02.css({
                    'transform': 'translateX(' + (prog * 100) + 'px)',
                    'opacity': prog
                });
                $asideBody02.css({
                    'transform': 'translateX(' + (prog * 200) + 'px)',
                    'opacity': prog
                })
            })
            .setClassToggle($pageList.eq(2), "current")
            .addIndicators({
                name: 'section03'
            }) // add indicators (requires plugin)
            .addTo(controller);

        /** section04 **/
        scene04 = new ScrollMagic.Scene({
                triggerElement: "#js-section04",
                triggerHook: 'onCenter',
                duration: winH
            })
            .setClassToggle($pageList.eq(3), "current")
            .on('progress', function (e) {
                var prog = e.progress;

                $section04BoxRed.css({
                    'transform': 'translateY(' + -(prog * 600) + 'px)',
                });
                $section04BoxGreen.css({
                    'transform': 'translateY(' + -(prog * 300) + 'px)',
                });
                $section04BoxBlue.css({
                    'transform': 'translateY(' + -(prog * 30) + 'px)',
                });
            })
            .addIndicators({
                name: 'section04'
            }) // add indicators (requires plugin)
            .addTo(controller);

        /** section05 **/
        scene05 = new ScrollMagic.Scene({
                triggerElement: "#js-section05",
                triggerHook: 'onCenter',
            })
            .setClassToggle($pageList.eq(4), "current")
            .on('enter', function (e) {
                $('#js-section05 .box-red,#js-section05 .box-green,#js-section05 .box-blue').addClass('is-active');
            })
            .on('leave', function (e) {
                $('#js-section05 .box-red,#js-section05 .box-green,#js-section05 .box-blue').removeClass('is-active')
            })
            .addIndicators({
                name: 'section05'
            }) // add indicators (requires plugin)
            .addTo(controller);

        sceneResetFlg = true;
    }

})();
