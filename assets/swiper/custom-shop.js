$ = jQuery.noConflict();
jQuery(document).ready(function($) {
    "use strict";		
		var mySwiper = new Swiper ('.swiper-container-shop', {
			slidesPerView: 3,
			spaceBetween: 30,
			slidesPerGroup: 3,
			loop: false, // navigation button enabled
			loopFillGroupWithBlank: true,
			grabCursor: true,
			
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
      		},
      		autoplay: {
	  			delay: 1500,
	  			disableOnInteraction: true,
      		},
      		keyboard: {
		    	enabled: true,
				onlyInViewport: false,
		  	},
      		autoHeight: true,
    	});
    	
    	$(".swiper-container-shop").mouseenter(function() {
		    mySwiper.autoplay.stop();
		    console.log('slider stopped');
		  });
		
		  $(".swiper-container-shop").mouseleave(function() {
		    mySwiper.autoplay.start();
		    console.log('slider started again');
		  });
    	
});