/*
Designer: Xatai
Site: Perfect.az
Facebook: https://fb.com/xetai.isayev
*/

$(document).ready(function(){
	
	var mainSlider=$('.main-slider');
        mainSlider.owlCarousel({
        loop:true,
        items:1,
        margin:0,
        dots:true,
        navText:false,
        nav:true,
        autoplay:false,
        autoplayTimeout:5000,
    });

    var productSlider=$('.product-carousel');
        productSlider.owlCarousel({
        loop:true,
        items:4,
        margin:24,
        dots:true,
        navText:false,
        nav:false,
        autoplay:false,
        dotsEach: 1,
        responsive : {
            0 : {
               items:2,
               autoWidth:true,
               margin: 16
            },
            601 : {
               items:2,
               autoWidth:false,
               margin: 20
            },
            780 : {
               items:3,
               autoWidth:false,
               margin: 24
            },
            1050 : {
               items:4,
               autoWidth:false,
               margin: 24
            },
        }
    });

    $('.product-fav').on('click', function() {
        $(this).hasClass('active') ? $(this).removeClass('active') : $(this).addClass('active')
    });

    $('.show-pass').on('click', function() {
       const fieldType =  $(this).prev('.s-pass').attr('type') === 'password' ? 'text' : 'password';
        $(this).prev('.s-pass').attr('type', fieldType);
        fieldType == "text" ? $(this).addClass('active') : $(this).removeClass('active')
    });

    $('.h-auth').on('click', function(e) {
        e.stopPropagation();
        $('.profile-menu').toggle()
    })

    $('.profile-menu').on('click', function(e) {
        e.stopPropagation();
    })

    $('.language').on('click', function(e) {
        e.stopPropagation();
        $('.language-list').toggle()
    })

    $(document).click(function() {
        $('.profile-menu').hide();
        $('.language-list').hide();
    });

    $('.h-menu').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('mobile-open');
    });
    $('.m-close').on('click', function() {
        $('body').removeClass('mobile-open');
    });

    $('.j-filter-button').on('click', function() {
        $('body').addClass('filter-open');
    });
    $('.j-filter-close').on('click', function(e) {
        e.stopPropagation();
        $('body').removeClass('filter-open');
    });
	
});