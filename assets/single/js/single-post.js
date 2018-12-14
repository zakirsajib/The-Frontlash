$ = jQuery.noConflict();
$(function ($) {
    "use strict";
    
    $(document).ready(function(){
	    $('.single-template article .entry-content strong').parent('p').css( "margin-bottom", "0" );
	});
});
