$ = jQuery.noConflict();
$(function ($) {
    "use strict";
    //LOADER 
    $(".loader").fadeOut(200);
    
    $("div.post-thumbnail > img").each(function() {
    	$(this).addClass('lazyload');
		$(this).attr("data-src",$(this).attr("src"));
		$(this).removeAttr("src");
    });
    
    /*----navbar-search----*/
    $('.search-icon').on('click', function () {
        $('.navbar-search-box').toggleClass("navbar-search-box-open");
        $(this).toggleClass("actives");

        if($(this).hasClass("actives")){
            $('.search-icon > i').toggleClass("fa-times-thin");
            $('.search-icon > i').toggleClass("fa-search");
            $(this).parent('.navbar-search-box-icon').css({"position": "fixed", "z-index": "100"});
        }else {
            $('.search-icon > i').toggleClass("fa-search");
            $('.search-icon > i').toggleClass("fa-times-thin");
            $('.navbar-search-box-icon').css({"position": "absolute", "z-index": "0"});
        }
    });

    /* ------- Smooth scroll ------- */
/*
    $(".scroll").on("click", function (event) {
        var menu = $("nav.navbar").innerHeight();
        event.preventDefault();
        $("html,body").animate({
            scrollTop: ($(this.hash).offset().top - 10)
        }, 1000);
    });
*/

    /* ------- Sidebar Toggle ------ */
    $(".menu-icon").on("click",function () {
        $(".full-menu").toggleClass("open");
    });
    if($(".full-nav li a").hasClass("scroll")){
        $(".full-nav li a").on("click",function () {
            $(".full-menu").removeClass("open");
        });
    }
    /*------ MENU Fixed ------*/
/*
    $(window).scroll(function () {
        var $scroll = $(window).scrollTop();
        var $navbar = $(".navbar");
        if ($scroll > 100) {
            $navbar.addClass("scroll-nav");
        } else {
            $navbar.removeClass("scroll-nav");
        }
    });
*/
    
    $(document).ready(function(){
	    //Check to see if the window is top if not then display button
		$(window).scroll(function(){
			if ($(this).scrollTop() > 50) {
				$('#scrollToTop').fadeIn();
			} else {
				$('#scrollToTop').fadeOut();
			}
		});
		//Click event to scroll to top
		$('#scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});				
    });    
});