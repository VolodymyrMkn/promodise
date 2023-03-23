    new WOW().init();

(function ($) {

   'use strict';

    /*
     * ----------------------------------------------------------------------------------------
     *  SMOTH SCROOL JS
     * ----------------------------------------------------------------------------------------
     */

    $('a.smoth-scroll').on('click', function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 50
        }, 1000);
        e.preventDefault();
    });

    /* ==========================================================================
      COUNTER UP 
 ========================================================================== */

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    $('.carousel').carousel({
      interval: 8000
    });
    
    /* Closes the Responsive Menu on Menu Item Click*/
    $('.navbar-collapse .navbar-nav a').on('click', function () {
        $('.navbar-toggler:visible').click();
    });
    /*END MENU JS*/

    
    /* ----------------------------------------------------------- */
    /*  Fixed header
    /* ----------------------------------------------------------- */


    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 70) {
            $('.site-navigation,.trans-navigation').addClass('header-white');
        } else {
            $('.site-navigation,.trans-navigation').removeClass('header-white');
        }



    });


    /* ==========================================================================
      SCROLL SPY
 ========================================================================== */

    $('body').scrollspy({
        target: '.navbar-collapse',
        offset: 195
    });

    /* ==========================================================================
  Ajax load category
========================================================================== */

    $('.category .ajax-category-link').on('click', function (e){
        e.preventDefault()
        $('.category .ajax-category-link').removeClass('active')
        $(this).addClass('active')
        const catId=$(this).data('id')
        const catLink=$(this).data('link')
        const btn=$(this)
        const currentLink=$(this)
        const dataHTML=$('.section.blog-wrap .col-lg-8 .row')
        const data={
            catId:catId,
            catLink:catLink,
            action:'get_post_ajax'
        }
        $.ajax({
            url: ajax_links.url,
            type: 'POST',
            data: data,
            beforeSend: function (xhr){
                btn.attr('disabled', 'disabled');
            },
            success:function (data){
                console.log(data)
                setTimeout(function (){
                    btn.removeAttr('disabled')
                }, 1000);
                dataHTML.html(data);
            },
            error:function (error){
                alert(error);
            }
        })
    })


})(window.jQuery);