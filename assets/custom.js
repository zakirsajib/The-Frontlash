$ = jQuery.noConflict();
$(function ($) {
    "use strict";
    
    $(document).ready(function(){
	    var $isotope = $('.search-style-grid').isotope({
	        itemSelector: '.post-item',
	        columnWidth: 0,
	        gutter: 0,
	        layoutMode: 'fitRows',
	    }).isotope('reloadItems');
	    $(window).load(function (){
	        setTimeout(function(){
	            $isotope.isotope('layout');
	        }, 0);
	    });
	    
	    // get Isotope instance
		var isotope = $isotope.data('isotope');
	    
	    /* Infinite AJAX Scroll */	    
	    $('.search-style-grid').infiniteScroll({
        	path : '.nav-links a',  
			append : '.post-item',
			outlayer: isotope,
			history: 'push',
			hideNav: '.navigation',
			status: '.page-load-status',
			//button: '.load-more-button',
		});
	});
});