$(function(){
    // SP追従ナビゲーション
    var startPos = 0,winScrollTop = 0;
    $(window).on('scroll',function(){
        winScrollTop = $(this).scrollTop();
        if (winScrollTop >= startPos && winScrollTop > 50) {
            $('.p-navSP').addClass('is-hidden');
        } else {
            $('.p-navSP').removeClass('is-hidden');
        }
        startPos = winScrollTop;
    });

    // ハンバーガーメニュー開閉
    $('.u-drawer_open').on('click',function(){
        $('.u-drawer_close').fadeIn();
        $('.u-drawer').fadeIn();
        $('body').addClass('have_curtain');
    });
    $('.u-drawer_close').on('click',function(){
        $('.u-drawer_close').fadeOut();
        $('.u-drawer').fadeOut();
        $('body').removeClass('have_curtain');
    });

    // ヘッダースライドショー
    $('.p-header__bg').slick({
        arrows: false,
        dots: false,
        infinite: true,
        speed: 200,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
    });
    
})