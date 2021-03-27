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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJjb21tb24uanMiXSwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbigpe1xuICAgIC8vIFNQ6L+95b6T44OK44OT44Ky44O844K344On44OzXG4gICAgdmFyIHN0YXJ0UG9zID0gMCx3aW5TY3JvbGxUb3AgPSAwO1xuICAgICQod2luZG93KS5vbignc2Nyb2xsJyxmdW5jdGlvbigpe1xuICAgICAgICB3aW5TY3JvbGxUb3AgPSAkKHRoaXMpLnNjcm9sbFRvcCgpO1xuICAgICAgICBpZiAod2luU2Nyb2xsVG9wID49IHN0YXJ0UG9zICYmIHdpblNjcm9sbFRvcCA+IDUwKSB7XG4gICAgICAgICAgICAkKCcucC1uYXZTUCcpLmFkZENsYXNzKCdpcy1oaWRkZW4nKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQoJy5wLW5hdlNQJykucmVtb3ZlQ2xhc3MoJ2lzLWhpZGRlbicpO1xuICAgICAgICB9XG4gICAgICAgIHN0YXJ0UG9zID0gd2luU2Nyb2xsVG9wO1xuICAgIH0pO1xuXG4gICAgLy8g44OP44Oz44OQ44O844Ks44O844Oh44OL44Ol44O86ZaL6ZaJXG4gICAgJCgnLnUtZHJhd2VyX29wZW4nKS5vbignY2xpY2snLGZ1bmN0aW9uKCl7XG4gICAgICAgICQoJy51LWRyYXdlcl9jbG9zZScpLmZhZGVJbigpO1xuICAgICAgICAkKCcudS1kcmF3ZXInKS5mYWRlSW4oKTtcbiAgICAgICAgJCgnYm9keScpLmFkZENsYXNzKCdoYXZlX2N1cnRhaW4nKTtcbiAgICB9KTtcbiAgICAkKCcudS1kcmF3ZXJfY2xvc2UnKS5vbignY2xpY2snLGZ1bmN0aW9uKCl7XG4gICAgICAgICQoJy51LWRyYXdlcl9jbG9zZScpLmZhZGVPdXQoKTtcbiAgICAgICAgJCgnLnUtZHJhd2VyJykuZmFkZU91dCgpO1xuICAgICAgICAkKCdib2R5JykucmVtb3ZlQ2xhc3MoJ2hhdmVfY3VydGFpbicpO1xuICAgIH0pO1xuXG4gICAgLy8g44OY44OD44OA44O844K544Op44Kk44OJ44K344On44O8XG4gICAgJCgnLnAtaGVhZGVyX19iZycpLnNsaWNrKHtcbiAgICAgICAgYXJyb3dzOiBmYWxzZSxcbiAgICAgICAgZG90czogZmFsc2UsXG4gICAgICAgIGluZmluaXRlOiB0cnVlLFxuICAgICAgICBzcGVlZDogMjAwLFxuICAgICAgICBmYWRlOiB0cnVlLFxuICAgICAgICBjc3NFYXNlOiAnbGluZWFyJyxcbiAgICAgICAgYXV0b3BsYXk6IHRydWUsXG4gICAgICAgIGF1dG9wbGF5U3BlZWQ6IDUwMDAsXG4gICAgfSk7XG4gICAgXG59KSJdLCJmaWxlIjoiY29tbW9uLmpzIn0=