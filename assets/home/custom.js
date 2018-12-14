jQuery(document).ready(function($) {
    "use strict";
	    
	    $('.home-newsletter').slice(-1).remove();
	    
	    /* Blog packery layout */
	    var $packery = $('.home-style-grid').packery({
	        itemSelector: '.post-item',
	        columnWidth: 0,
	        gutter: 0,
	        layoutMode: 'packery',
	    }).packery('reloadItems');
	    	    
	    $(window).load(function (){
	        setTimeout(function(){
	           $packery.packery('layout');
	        }, 0);
	    });	    
});