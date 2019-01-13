$ = jQuery.noConflict();
$(function ($) {
    "use strict";
    
    $(document).ready(function(){
		var mySwiper = new Swiper ('.swiper-container', {
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
      		},
      		pagination: {
	  			el: '.swiper-pagination',
	  			dynamicBullets: true,
	  			type: 'fraction',
      		},
      		autoplay: false,
      		keyboard: {
		    	enabled: true,
				onlyInViewport: false,
		  	},
		  	effect: 'fade',
		  	grabCursor: true,
      		autoHeight: false,
			loop: false
    	})
	});
});