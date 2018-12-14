<?php 
function _frontlash_google_analytics_js() {
    if (!defined('FW')) return; // prevent fatal error when the framework is not active
    $google_analytics = fw_get_db_settings_option('google_analytics');
    if(!empty($google_analytics)):
    	
    	echo '<script async="async" type="text/javascript">';
		echo '(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){';
		echo '(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),';
		echo 'm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)';
  		echo '})(window,document,"script","//www.google-analytics.com/analytics.js","ga");';

  		echo 'ga("create", "'.$google_analytics.'", "auto");';
  		echo 'ga("send", "pageview");';
  		echo '</script>';
    	
    endif;
}
add_action('wp_footer', '_frontlash_google_analytics_js');