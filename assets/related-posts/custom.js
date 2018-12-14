$ = jQuery.noConflict();
$(function ($) {
    "use strict";
    
    $(document).ready(function(){
	    var $packery = $('.related-article-style-grid').packery({
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
});