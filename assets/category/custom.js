$ = jQuery.noConflict();
$(function ($) {
    "use strict";
    
    $(document).ready(function(){
	    var $packery = $('.archive-style-grid').packery({
	        itemSelector: '.post-item',
	        columnWidth: 0,
	        gutter: 0,
	        layoutMode: 'packery',
	    }).packery('reloadItems');
	    $(window).load(function (){
	        setTimeout(function(){
	            $packery.packery('layout');
	        },0);
	    });
	});
});