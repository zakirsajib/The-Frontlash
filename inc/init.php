<?php

//* Add theme info box into WordPress Dashboard
function frontlash_add_dashboard_widgets() {
  wp_add_dashboard_widget('wp_dashboard_widget', 'Theme Details', 'frontlash_theme_info');
}
add_action('wp_dashboard_setup', 'frontlash_add_dashboard_widgets' );
 
function frontlash_theme_info() {
  echo "<ul>
  <li><strong>Developed By:</strong> Zakir Sajib</li>
  <li><strong>Website:</strong> <a href='https://github.com/zakirsajib'>https://github.com/zakirsajib</a></li>
  <li><strong>Contact:</strong> <a href='mailto:zakirsajib@gmail.com'>zakirsajib@gmail.com</a></li>
  <li><strong>Skype:</strong> sajibuk</li>
  </ul>";
}

function change_admin_footer(){
	echo '<span id="footer-note">Developed by <a href="mailto:zakirsajib@gmail.com">Zakir Sajib</a>.</span>';
}
add_filter('admin_footer_text', 'change_admin_footer');

/**
 * Admin panel - load styles and scripts in theme options
 */
if( defined('FW') && is_admin() && isset( $_GET['page'] ) && $_GET['page'] == 'fw-settings' ) :

    function frontlash_admin_enqueue_styles() {
        wp_enqueue_style( 'frontlash-theme-options', get_template_directory_uri() . '/assets/css/admin/css/theme-options.css' );
    }
    add_action( 'admin_enqueue_scripts', 'frontlash_admin_enqueue_styles' );

endif;


/**
 * Disable WordPress Events and News widget from the dashboard.
 *
 * @since 1.0
 */
function frontlash_remove() {
	remove_meta_box( 'dashboard_primary', get_current_screen(), 'side' );
}
add_action( 'wp_network_dashboard_setup', 'frontlash_remove', 20 );
add_action( 'wp_user_dashboard_setup',    'frontlash_remove', 20 );
add_action( 'wp_dashboard_setup',         'frontlash_remove', 20 );

/**
 * Shortcode Options
*/
if ( !function_exists( 'frontlash_shortcode_options' ) && defined('FW')) :
    function frontlash_shortcode_options($data,$shortcode){
        $atts = shortcode_parse_atts( $data['atts_string'] );
        if( is_array($atts) ) :
            $atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
        endif;
        return $atts;
    }
endif;

/**
 * Minify output
 */
if ( ! function_exists( 'frontlash_compress' ) ) :
	function frontlash_compress($buf){
        return preg_replace(array('/<!--(.*)-->/Uis',"/[[:blank:]]+/"),array('',' '),str_replace(array("\n","\r","\t"),'',$buf));
	}
endif;

/**
* Change the Login Logo
*/
function my_login_logo() { 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	if(!empty($image)):
?>
    <style type="text/css">
        #login{padding: 1% 0 0!important;}
        #login h1 a, 
        .login h1 a {
            background-image: url('<?php echo $image[0]?>');
            width: auto;
            height: 140px;
            background-size: contain;
            background-position: center center;
        }
        #login h1 a:focus,
        .login h1 a:focus{
	        outline: 0;
	        box-shadow: none;
        }
    </style>
<?php endif;}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/**
* Infinite Scroll
*/
function frontlash_infinite_scroll(){?>
	<div class="page-load-status">
		<div class="loader-ellips infinite-scroll-request">
			<span class="loader-ellips__dot"></span>
			<span class="loader-ellips__dot"></span>
			<span class="loader-ellips__dot"></span>
		</div>
		<p class="infinite-scroll-last">End of content</p>
		<p class="infinite-scroll-error">No more pages to load</p>
	</div>
<?php }


/**
* Custom BOTH category and tags
*/	
function frontlash_cat_tags(){
	
	if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'frontlash' ) );
			
			echo '<div class="cat-tags-links">';
			
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				echo '<div class="frontlash-cat-links">';
				printf( '<span class="cat-links">' . esc_html__( '%1$s', 'frontlash' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				if(has_tag()):
					echo '<span class="tags-links">,&nbsp;</span>';
				endif;
				echo '</div>';
			}

			/* translators: used between list items, there is a space after the comma */
			//$tags_list = strip_tags(get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'frontlash' ) ));
			
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'frontlash' ) );
			
			if ( $tags_list ) {
				echo '<div class="frontlash-tags-links">';
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( '%1$s', 'frontlash' ) . '</span>', $tags_list ); // WPCS: XSS OK.
				echo '</div>';
			}
			
			echo '</div>';
		}
	
}


/**
* Custom category
*/	
function frontlash_cat(){
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'frontlash' ) );
		echo '<div class="cat-tags-links">';
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				echo '<div class="frontlash-cat-links">';
				printf( '<span class="cat-links">' . esc_html__( '%1$s', 'frontlash' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				echo '</div>';
			}
		echo '</div>';
	}
}

/**
* Custom tags
*/	
function frontlash_tags(){
	
	if ( 'post' === get_post_type() ) {
						
		echo '<div class="cat-tags-links">';
			
			/* translators: used between list items, there is a space after the comma */
			//$tags_list = strip_tags(get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'frontlash' ) ));
			
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'frontlash' ) );
			
			if ( $tags_list ) {
				echo '<div class="frontlash-tags-links">';
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( '%1$s', 'frontlash' ) . '</span>', $tags_list ); // WPCS: XSS OK.
				echo '</div>';
			}
			
		echo '</div>';
	}
}

/**
* Newsletter
*/

function frontlash_newsletter($pagename){?>
<div class="newsletter <?php echo $pagename?>">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<?php if (defined('FW')):
			$newsletter_heading = fw_get_db_settings_option('newsletter_heading');
			$newsletter_para_1 = fw_get_db_settings_option('newsletter_para_1');
			$newsletter_para_2 = fw_get_db_settings_option('newsletter_para_2');?>
			<div class="newsletter-message text-center">
				<?php if($newsletter_heading):?>
					<h4><?php echo $newsletter_heading;?></h4>
				<?php else:?>
					<h4>Want More?</h4>
				<?php endif;?>
				<?php if($newsletter_para_1):?>
					<p><?php echo $newsletter_para_1;?></p>
				<?php else:?>	
					<p>Sign up for The Fronltash Newsletter.</p>
				<?php endif;?>
				<?php if($newsletter_para_2):?>
					<p><?php echo $newsletter_para_2;?></p>
				<?php else:?>	
					<p>Unsubscribe anytime.</p>
				<?php endif;?>
			</div>
		<?php endif;?>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div id="mc_embed_signup">
			<form action="https://thefrontlash.us14.list-manage.com/subscribe/post?u=a8e54214ec079e38ebd59274e&amp;id=30f83d9e66" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			  	<div id="mc_embed_signup_scroll" style="display:flex;">
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_57dbd21e405e6ca50bba6ab64_d2522caf94" tabindex="-1" value=""></div>
			    	<div class="clearfix">
				    	<input type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="button">
				    </div>
			    </div>
			</form>
		</div>	
	</div>
</div>
<?php }


function frontlash__mobile_newsletter(){?>
<div class="newsletter">
	<div class="col-sm-12 col-xs-12">
		<?php if (defined('FW')):?>
		<div class="newsletter-message">
			<?php $mobile_newsletter_heading = fw_get_db_settings_option('mobile_newsletter_heading');
			if($mobile_newsletter_heading):?>
				<h4><?php echo $mobile_newsletter_heading;?></h4>
			<?php else:?>
				<h4>Frontlash Newsletter</h4>
			<?php endif;?>
		</div>
		<?php endif;?>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div id="mc_embed_signup">
			<form action="https://thefrontlash.us14.list-manage.com/subscribe/post?u=a8e54214ec079e38ebd59274e&amp;id=30f83d9e66" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll" style="display:flex;">
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_57dbd21e405e6ca50bba6ab64_d2522caf94" tabindex="-1" value=""></div>
			    <div class="clearfix">
				    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></button>
				    </div>
			    </div>
			</form>
		</div>	
	</div>
</div>
<?php }


/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//Exclude pages from WordPress Search
if (!is_admin()) {
	function wpb_search_filter($query) {
		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;
	}
	add_filter('pre_get_posts','wpb_search_filter');
}

/**
* Related Posts
*/
function frontlash_related_posts(){
	// Get the tags for the current post
	//$orig_post = $post;
	global $post;
	$tags = wp_get_post_tags($post->ID);
	
	// If the post has tags, run the related post tag query
	if ($tags) {
		$tag_ids = array();
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		// Build our tag related custom query arguments
		$custom_query_args=array(
			'tag__in' => $tag_ids, // Select posts with related tags
			'posts_per_page' => 4, // Number of related posts to display
			'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
			'orderby' => 'rand', // Randomize the results
		);
	} else {
		// If the post does not have tags, run the standard related posts query
		$custom_query_args = array( 
			'posts_per_page' => 4, // Number of related posts to display
			'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
			'orderby' => 'rand', // Randomize the results
		);
	}
	
	$custom_query = new WP_Query( $custom_query_args );
	
	if ( $custom_query->have_posts() ) : ?>
	<div class="content-area related-article">
		<div class="container">
			<?php if (defined('FW')):
				$related_posts_title = fw_get_db_settings_option('related_posts_title');
				if($related_posts_title):?>
					<h2 class="related-article-title"><?php echo $related_posts_title;?></h2>
				<?php else:?>
					<h2 class="related-article-title">You Might Also Like</h2>
				<?php endif; 
			endif;?>
			<div class="related-article-style-grid">
				<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-3 col-sm-6 col-xs-12 post-item'); ?>>
						<?php if(fw_get_db_post_option(get_the_id(),'post-video-thumbnail') || has_tag('video')):?>
							<div class="video-thumbnail" data-aos="fade-up" data-aos-once="false" data-aos-offset="-250" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
								<div class="play-icon"><a href="<?php the_permalink()?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Play_Button.svg" alt="Video Play button"></a></div>
								<?php frontlash_post_thumbnail(); ?>
							</div>
						<?php else:?>
						<div data-aos="fade-up" data-aos-once="false" data-aos-offset="120" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
							<?php frontlash_post_thumbnail(); ?>
						</div>
						<?php endif?>
						<?php frontlash_cat_tags();?>
						
						<header class="entry-header">
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						</header><!-- .entry-header -->
					
						<div class="entry-summary">
							<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->
						
						<div class="excerpt-readmore">
							<a href="<?php the_permalink()?>" rel="nofollow">Read More</a>
						</div><!-- .entry-summary -->
						
					</article><!-- #post-<?php the_ID(); ?> -->
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif;?>
	</div>
	<?php // Reset postdata
	wp_reset_postdata();
}

/**
 Add featured thumbnail to admin post columns
 
**/

if ( function_exists( 'add_theme_support' ) ) {
    add_filter( 'manage_posts_columns' , 'frontlash_add_custom_columns' );
    add_action( 'manage_posts_custom_column' , 'frontlash_add_thumbnail_columns_data', 10, 2 );
    add_action( 'manage_posts_custom_column' , 'frontlash_add_modified_author_columns_data', 10, 2 );
    //add_filter( 'manage_pages_columns' , 'frontlash_add_thumbnail_columns' );
    //add_action( 'manage_pages_custom_column' , 'frontlash_add_thumbnail_columns_data', 10, 2 );
}

function frontlash_add_custom_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => 'Title',
        'featured_thumb' => 'Thumbnail',
        'img_orientation' => 'Image Orientation',
        'author' => 'Author',
        'the_modified_author'	=> 'Last modified',
        'categories' => 'Categories',
        'tags' => 'Tags',
        'comments' => '<span class="vers"><div title="Comments" class="comment-grey-bubble"></div></span>',
        'date' => 'Date'
    );
    return $columns;
}

function frontlash_add_thumbnail_columns_data( $column, $post_id ) {
    switch ( $column ) {
    case 'featured_thumb':
        echo '<a href="' . get_edit_post_link() . '">';
        echo the_post_thumbnail( 'admin-list-thumb' );
        echo '</a>';
        break;
    case 'img_orientation':
    	echo fw_get_db_post_option(get_the_id(), 'post-image-orientation');
    	break;
    }
}
add_image_size( 'admin-list-thumb', 80, 80, false );

function frontlash_add_modified_author_columns_data($column, $post_id){
	switch ( $column ) {
    case 'the_modified_author':
        echo the_modified_author();
        echo '<br>';
        echo get_post_modified_time('F d, g:i a');
        break;
    }
}

add_action ('wp_head', function(){
	$sticky = get_option( 'sticky_posts' );
	rsort( $sticky );
	$sticky = array_slice( $sticky, 0, 1 );?>
	<link rel="dns-prefetch" href="<?php the_permalink($sticky[0])?>" crossorigin />
	<link rel="prefetch" href="<?php the_permalink($sticky[0])?>" crossorigin />
	<link rel="preconnect" href="<?php the_permalink($sticky[0])?>" crossorigin />
	
	<link rel="dns-prefetch" href="<?php echo get_site_url()?>/community-become-a-member" crossorigin />
	<link rel="prefetch" href="<?php echo get_site_url()?>/community-become-a-member" crossorigin />
	<link rel="preconnect" href="<?php echo get_site_url()?>/community-become-a-member" crossorigin />
	
	<link rel="dns-prefetch" href="<?php echo get_site_url()?>/category/cash-all-the-deals" crossorigin />
	<link rel="prefetch" href="<?php echo get_site_url()?>/category/cash-all-the-deals" crossorigin />
	<link rel="preconnect" href="<?php echo get_site_url()?>/category/cash-all-the-deals" crossorigin />
	
	<link rel="dns-prefetch" href="<?php echo get_site_url()?>/category/progress-a-new-way" crossorigin />
	<link rel="prefetch" href="<?php echo get_site_url()?>/category/progress-a-new-way" crossorigin />
	<link rel="preconnect" href="<?php echo get_site_url()?>/category/progress-a-new-way" crossorigin />
	
	<link rel="dns-prefetch" href="<?php echo get_site_url()?>/category/fashion-get-inspired" crossorigin />
	<link rel="prefetch" href="<?php echo get_site_url()?>/category/fashion-get-inspired" crossorigin />
	<link rel="preconnect" href="<?php echo get_site_url()?>/category/fashion-get-inspired" crossorigin />
<?php });


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function frontlash_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'General Sidebar', 'frontlash' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'frontlash' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'frontlash' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'frontlash' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'frontlash' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'frontlash' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'frontlash' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'frontlash' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

function frontlash_scripts_css_footer(){
	
	
	
	if( is_home() || is_front_page() || is_404() || is_page() || is_search() ):
		require get_template_directory() . '/assets/css/home-settings.php';
	endif; // is_home () ends
	if(is_home() || is_front_page()):
    	wp_enqueue_style( 'sb_instagram_styles', plugins_url() . '/instagram-feed/css/sb-instagram.min.css');
    	
    	if (defined('FW')):
			$post_image_orientation = fw_get_db_post_option(get_the_ID(),'post-image-orientation');
			if($post_image_orientation == 'landscape-orientation'):
				wp_enqueue_style( 'frontlash-swiper-landscape-dist-home', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
				wp_enqueue_style( 'frontlash-swiper-landscape-custom-home', get_template_directory_uri() .'/assets/swiper/custom.css' );
			elseif($post_image_orientation == 'portrait-orientation'):
				wp_enqueue_style( 'frontlash-swiper-portrait-dist-home', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
				wp_enqueue_style( 'frontlash-swiper-portrait-custom-home', get_template_directory_uri() .'/assets/swiper/custom-interview.css' );
			endif;
    	endif;
    	
    	$shop_display_choice = fw_get_db_settings_option('shop_display_choice');
		if($shop_display_choice == 'home_page' || $shop_display_choice == 'both_h_s'):
			$post_gallery = fw_get_db_post_option(2, 'post-gallery');
			if( is_array($post_gallery) && count($post_gallery) < 0 ):
				wp_enqueue_style( 'frontlash-swiper-home', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
			endif;
    		wp_enqueue_style( 'frontlash-swiper-home-custom-shop', get_template_directory_uri() .'/assets/swiper/custom-shop.css' );
    	endif;
    endif; // is_home () ends
    
    if(is_single()):
    	
    	wp_dequeue_style( 'fw-ext-forms-default-styles' );
		wp_dequeue_style( 'fw-shortcode-section-background-video' );
		wp_dequeue_style( 'fw-shortcode-section' );
		wp_dequeue_style( 'fw-shortcode-media-image' );
    	
    	if(in_category(array(4,'cash-all-the-deals'))):
			require get_template_directory() . '/assets/single/css/catone1.php';
		elseif(in_category(array(5,'progress-a-new-way'))):
			require get_template_directory() . '/assets/single/css/cattwo2.php';
		elseif(in_category(array(7,'fashion-get-inspired'))):
			require get_template_directory() . '/assets/single/css/catthree3.php';
		endif;
		
		if (defined('FW')):
			$post_gallery = fw_get_db_post_option(get_the_ID(), 'post-gallery');
			
			if( is_array($post_gallery) && count($post_gallery) > 0 ):
				wp_enqueue_style( 'frontlash-swiper-style', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
				
				if (defined('FW')):
					$post_image_orientation = fw_get_db_post_option(get_the_ID(),'post-image-orientation');
					if($post_image_orientation == 'landscape-orientation'):
						wp_enqueue_style( 'frontlash-swiper-landscape-custom-cash', get_template_directory_uri() .'/assets/swiper/custom.css' );
					elseif($post_image_orientation == 'portrait-orientation'):
								
						wp_enqueue_style( 'frontlash-swiper-portrait-custom-cash', get_template_directory_uri() .'/assets/swiper/custom-interview.css' );
					endif;
				endif;
			endif;
		endif;
		
		// Show/hide shop carousel
		if (defined('FW')):
			$shop_display_choice = fw_get_db_settings_option('shop_display_choice');
			if($shop_display_choice == 'story_page' || $shop_display_choice == 'both_h_s'):
				if(fw_get_db_post_option(get_the_ID(), 'post-video')):
				wp_enqueue_style( 'frontlash-swiper-shop', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
				endif;
				
				//wp_enqueue_style( 'frontlash-swiper-shop', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css');
				wp_enqueue_style( 'frontlash-swiper-custom-shop', get_template_directory_uri() .'/assets/swiper/custom-shop.css');
			endif;
		endif;
		
		//wp_enqueue_style( 'frontlash-single-post-style', get_template_directory_uri() .'/assets/single/css/single-post.css' );
    	wp_enqueue_style( 'sharedaddy', get_template_directory_uri() .'/assets/single/css/sharedaddy.css', array(), filemtime( get_template_directory().'/assets/single/css/sharedaddy.css') );
		
		wp_enqueue_style( 'social-logos', '//c0.wp.com/p/jetpack/6.8/_inc/social-logos/social-logos.min.css');
    endif; // is_sinlge () ends
    
    if(is_category(array(4,'cash-all-the-deals'))):
    			
		require get_template_directory() . '/assets/single/css/catonecat.php';
		
		if (defined('FW')):
		
		$the_query = new WP_Query( array( 
			'post_status' => 'publish', 
			'tag' => 'feature', 
			'cat'	=>	4 
		) );
		if ( $the_query->have_posts() ):
			while ( $the_query->have_posts() ) : 
				$the_query->the_post();
				$current_ID = get_the_ID();
			endwhile;
			wp_reset_query();
				
		$post_image_orientation = fw_get_db_post_option($current_ID,'post-image-orientation');
		if($post_image_orientation == 'landscape-orientation'):
			wp_enqueue_style( 'frontlash-swiper-landscape-dist-cash', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
			wp_enqueue_style( 'frontlash-swiper-landscape-custom-cash', get_template_directory_uri() .'/assets/swiper/custom.css' );
		elseif($post_image_orientation == 'portrait-orientation'):
			wp_enqueue_style( 'frontlash-swiper-portrait-dist-cash', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
			wp_enqueue_style( 'frontlash-swiper-portrait-custom-cash', get_template_directory_uri() .'/assets/swiper/custom-interview.css' );
		endif;endif;endif;
	
	elseif( is_category(array(5, 'progress-a-new-way')) ):
				
		require get_template_directory() . '/assets/single/css/cattwocat.php';
		
		if (defined('FW')):
		
		$the_query = new WP_Query( array( 
			'post_status' => 'publish', 
			'tag' => 'feature', 
			'cat'	=>	5 
		) );
		if ( $the_query->have_posts() ):
			while ( $the_query->have_posts() ) : 
				$the_query->the_post();
				$current_ID = get_the_ID();
			endwhile;
			wp_reset_query();
		
		$post_image_orientation = fw_get_db_post_option($current_ID,'post-image-orientation');
		if($post_image_orientation == 'landscape-orientation'):
			wp_enqueue_style( 'frontlash-swiper-landscape-dist-progress', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
			wp_enqueue_style( 'frontlash-swiper-landscape-custom-progress', get_template_directory_uri() .'/assets/swiper/custom.css' );
		elseif($post_image_orientation == 'portrait-orientation'):
			wp_enqueue_style( 'frontlash-swiper-portrait-dist-progress', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
			wp_enqueue_style( 'frontlash-swiper-portrait-custom-progress', get_template_directory_uri() .'/assets/swiper/custom-interview.css' );
		endif;endif;endif;
		
	elseif(is_category(array(7, 'fashion-get-inspired' ))):
				
		require get_template_directory() . '/assets/single/css/catthreecat.php';
		
		if (defined('FW')):
		
		$the_query = new WP_Query( array( 
			'post_status' => 'publish', 
			'tag' => 'feature', 
			'cat'	=>	7 
		) );
		if ( $the_query->have_posts() ):
			while ( $the_query->have_posts() ) : 
				$the_query->the_post();
				$current_ID = get_the_ID();
			endwhile;
			wp_reset_query();
		
		$post_image_orientation = fw_get_db_post_option($current_ID,'post-image-orientation');
		if($post_image_orientation == 'landscape-orientation'):
			wp_enqueue_style( 'frontlash-swiper-landscape-dist-fashion', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
			wp_enqueue_style( 'frontlash-swiper-landscape-custom-fashion', get_template_directory_uri() .'/assets/swiper/custom.css' );
		elseif($post_image_orientation == 'portrait-orientation'):
			wp_enqueue_style( 'frontlash-swiper-portrait-dist-fashion', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
			wp_enqueue_style( 'frontlash-swiper-portrait-custom-fashion', get_template_directory_uri() .'/assets/swiper/custom-interview.css' );
		endif;
		endif;
		endif;
    endif;
    
    if( is_page() ):
		if (defined('FW')):
		$image_orientation = fw_get_db_post_option(get_the_ID(),'image-orientation');
		if($image_orientation == 'landscape-orientation'):
			wp_enqueue_style( 'frontlash-swiper-landscape-dist', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
			wp_enqueue_style( 'frontlash-swiper-landscape-custom', get_template_directory_uri() .'/assets/swiper/custom.css' );
		elseif($image_orientation == 'portrait-orientation'):
			wp_enqueue_style( 'frontlash-swiper-portrait-dist', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
			wp_enqueue_style( 'frontlash-swiper-portrait-custom', get_template_directory_uri() .'/assets/swiper/custom-interview.css' );
		endif;
		endif;
	endif;
    
    if(is_tag()):
    	require get_template_directory() . '/assets/css/tag-settings.php';
    endif;
    
    if(is_page(11) || is_page('community-become-a-member')):
    	wp_enqueue_style( 'frontlash-community', get_template_directory_uri() .'/assets/page/custom.css' );
    endif;
    
    if(is_search() ):
    	require get_template_directory() . '/assets/css/search-settings.php';
		//wp_enqueue_style( 'custom-infinite-scroll', get_template_directory_uri() . '/assets/infinite-scroll.css');
    endif;
    
    wp_enqueue_style('pwp-style', plugins_url() . '/progressive-wp/assets/styles/ui.css');
    
    wp_enqueue_style('fw-ext-builder-frontend-grid', plugins_url() . '/unyson/framework/extensions/builder/static/css/frontend-grid.css');
    
}
add_action( 'footer_css', 'frontlash_scripts_css_footer', 100);


function header_script_style(){?>
<script>function work(){$(".loader").fadeOut(100)}if(document.readyState=='loading'){document.addEventListener('DOMContentLoaded',work)}</script>
<?php }
add_action ('wp_head', 'header_script_style');
/**
 * Enqueue scripts and styles.
 */
function frontlash_scripts() {	
	
	wp_enqueue_style( 'frontlash-style', get_stylesheet_uri());
	
	wp_dequeue_style( 'fw-ext-builder-frontend-grid' );
	wp_dequeue_style( 'fw-ext-forms-default-styles' );
	wp_dequeue_style( 'fw-shortcode-section-background-video' );
	wp_dequeue_style( 'fw-shortcode-section' );
	
	wp_enqueue_script( 'frontlash-aos', get_template_directory_uri() . '/node_modules/aos/dist/aos.js', array('jquery'), null, true );	
	
	if(is_category(array(4,'cash-all-the-deals'))):
		
		// enable packery layout
		wp_enqueue_script( 'frontlash-packery-cash', get_template_directory_uri() . '/node_modules/packery/dist/packery.pkgd.min.js', array('jquery'), null, true );
		
		// custom packery code
		wp_enqueue_script( 'frontlash-custom-packery-cash', get_template_directory_uri() . '/assets/category/custom.js', array('jquery'), null, true );
		
		
		if (defined('FW')):
		
		$the_query = new WP_Query( array( 
			'post_status' => 'publish', 
			'tag' => 'feature', 
			'cat'	=>	4 
		) );
		if ( $the_query->have_posts() ):
			while ( $the_query->have_posts() ) : 
				$the_query->the_post();
				$current_ID = get_the_ID();
			endwhile;
			wp_reset_query();
				
		$post_image_orientation = fw_get_db_post_option($current_ID,'post-image-orientation');
		
		if($post_image_orientation == 'landscape-orientation'):
			wp_enqueue_script( 'frontlash-swiper-landscape-dist-cash', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );
			wp_enqueue_script( 'frontlash-swiper-landscape-custom-cash', get_template_directory_uri() . '/assets/swiper/custom.js', array('jquery'), null, true );
		
		elseif($post_image_orientation == 'portrait-orientation'):
			wp_enqueue_script( 'frontlash-swiper-portrait-dist-cash', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );		
			wp_enqueue_script( 'frontlash-swiper-portrait-custom-cash', get_template_directory_uri() . '/assets/swiper/custom-interview.js', array('jquery'), null, true );
		endif;
		endif;
		endif;
		
	elseif( is_category(array(5, 'progress-a-new-way')) ):
		// enable packery layout
		wp_enqueue_script( 'frontlash-packery-progress', get_template_directory_uri() . '/node_modules/packery/dist/packery.pkgd.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'frontlash-custom-packery-progress', get_template_directory_uri() . '/assets/category/custom.js', array('jquery'), null, true );
		
		
		if (defined('FW')):
		
		$the_query = new WP_Query( array( 
			'post_status' => 'publish', 
			'tag' => 'feature', 
			'cat'	=>	5 
		) );
		if ( $the_query->have_posts() ):
			while ( $the_query->have_posts() ) : 
				$the_query->the_post();
				$current_ID = get_the_ID();
			endwhile;
			wp_reset_query();
		
		$post_image_orientation = fw_get_db_post_option($current_ID,'post-image-orientation');
				
		if($post_image_orientation == 'landscape-orientation'):
			wp_enqueue_script( 'frontlash-swiper-landscape-dist-progress', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );
			wp_enqueue_script( 'frontlash-swiper-landscape-custom-progress', get_template_directory_uri() . '/assets/swiper/custom.js', array('jquery'), null, true );
		elseif($post_image_orientation == 'portrait-orientation'):
			wp_enqueue_script( 'frontlash-swiper-portrait-dist-progress', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );		
			wp_enqueue_script( 'frontlash-swiper-portrait-custom-progress', get_template_directory_uri() . '/assets/swiper/custom-interview.js', array('jquery'), null, true );
		endif;
		endif;
		endif;
		
		
	elseif(is_category(array(7, 'fashion-get-inspired' ))):
				
		// enable packery layout
		wp_enqueue_script( 'frontlash-packery-fashion', get_template_directory_uri() . '/node_modules/packery/dist/packery.pkgd.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'frontlash-custom-packery-fashion', get_template_directory_uri() . '/assets/category/custom.js', array('jquery'), null, true );
		
		if (defined('FW')):
		
		$the_query = new WP_Query( array( 
			'post_status' => 'publish', 
			'tag' => 'feature', 
			'cat'	=>	7 
		) );
		if ( $the_query->have_posts() ):
			while ( $the_query->have_posts() ) : 
				$the_query->the_post();
				$current_ID = get_the_ID();
			endwhile;
			wp_reset_query();
		
		$post_image_orientation = fw_get_db_post_option($current_ID,'post-image-orientation');
		if($post_image_orientation == 'landscape-orientation'):
			wp_enqueue_script( 'frontlash-swiper-landscape-dist-fashion', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );
			wp_enqueue_script( 'frontlash-swiper-landscape-custom-fashion', get_template_directory_uri() . '/assets/swiper/custom.js', array('jquery'), null, true );
		
		elseif($post_image_orientation == 'portrait-orientation'):
			wp_enqueue_script( 'frontlash-swiper-portrait-dist-fashion', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );		
			wp_enqueue_script( 'frontlash-swiper-portrait-custom-fashion', get_template_directory_uri() . '/assets/swiper/custom-interview.js', array('jquery'), null, true );
		endif;
		endif;
		endif;
	endif;
	
	if( is_home() || is_front_page()):
		if (defined('FW')):
		$post_image_orientation = fw_get_db_post_option(get_the_ID(),'post-image-orientation');
		
		if($post_image_orientation == 'landscape-orientation'):
			wp_enqueue_script( 'frontlash-swiper-landscape-dist-home', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );
			wp_enqueue_script( 'frontlash-swiper-landscape-custom-home', get_template_directory_uri() . '/assets/swiper/custom.js', array('jquery'), null, true );
		
		elseif($post_image_orientation == 'portrait-orientation'):
			wp_enqueue_script( 'frontlash-swiper-portrait-dist-home', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );		
			wp_enqueue_script( 'frontlash-swiper-portrait-custom-home', get_template_directory_uri() . '/assets/swiper/custom-interview.js', array('jquery'), null, true );
		endif;
		endif;
	endif; // End Home
	
	
	if( is_page() ):
		if (defined('FW')):
		$image_orientation = fw_get_db_post_option(get_the_ID(),'image-orientation');
		if($image_orientation == 'landscape-orientation'):
			wp_enqueue_script( 'frontlash-swiper-landscape-dist', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );
			wp_enqueue_script( 'frontlash-swiper-landscape-custom', get_template_directory_uri() . '/assets/swiper/custom.js', array('jquery'), null, true );
		elseif($image_orientation == 'portrait-orientation'):
			wp_enqueue_script( 'frontlash-swiper-portrait-dist', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );		
			wp_enqueue_script( 'frontlash-swiper-portrait-custom', get_template_directory_uri() . '/assets/swiper/custom-interview.js', array('jquery'), null, true );
		endif;
		endif;
	endif;
	
	if( is_home() || is_front_page()):		
		// enable packery layout
		wp_enqueue_script( 'frontlash-packery-home', get_template_directory_uri() . '/node_modules/packery/dist/packery.pkgd.min.js', array('jquery'), null, true );
		
		// custom packery
		wp_enqueue_script( 'frontlash-custom-packery-home', get_template_directory_uri() . '/assets/home/custom.js', array('jquery'), null, true );
		
		// Show/Hide Shop		
		$shop_display_choice = fw_get_db_settings_option('shop_display_choice');
		if($shop_display_choice == 'home_page' || $shop_display_choice == 'both_h_s'):
			$post_gallery = fw_get_db_post_option(2, 'post-gallery');
			if( is_array($post_gallery) && count($post_gallery) < 0 ):
				//wp_enqueue_style( 'frontlash-swiper-home', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
				wp_enqueue_script( 'frontlash-swiper-home', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );
			endif;
			
			//wp_enqueue_style( 'frontlash-swiper-home-custom-shop', get_template_directory_uri() .'/assets/swiper/custom-shop.css' );
			wp_enqueue_script( 'frontlash-swiper-home-custom-shop', get_template_directory_uri() . '/assets/swiper/custom-shop.js', array('jquery'), null, true );
			
		endif;
	endif; // end home 
	
	if(is_search() ):
		//isotope
		wp_enqueue_script( 'frontlash-isotope', get_template_directory_uri() . '/assets/isotope/isotope.pkgd.min.js', array('jquery'), null, true );
		//infinite scroll
		wp_enqueue_script( 'frontlash-infinite-scroll', get_template_directory_uri() . '/assets/infinite-scroll/infinite-scroll.pkgd.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'frontlash-custom-isotope-ias', get_template_directory_uri() . '/assets/custom.js', array('jquery'), null, true );
	
	endif;
	
	if(is_tag()):
		wp_enqueue_script( 'frontlash-packery-cash', get_template_directory_uri() . '/node_modules/packery/dist/packery.pkgd.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'frontlash-custom-isotope-ias-tag', get_template_directory_uri() . '/assets/custom-tag.js', array('jquery'), null, true );
	endif;
	
	if ( is_single()):		

		if (defined('FW')):
			$post_gallery = fw_get_db_post_option(get_the_ID(), 'post-gallery');
			
			if( is_array($post_gallery) && count($post_gallery) > 0 ):
				//wp_enqueue_style( 'frontlash-swiper-style', get_template_directory_uri() .'/node_modules/swiper/dist/css/swiper.min.css' );
				wp_enqueue_script( 'frontlash-swiper-js', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );
				
				
				if (defined('FW')):
				$post_image_orientation = fw_get_db_post_option(get_the_ID(),'post-image-orientation');
				if($post_image_orientation == 'landscape-orientation'):
					
					//wp_enqueue_style( 'frontlash-swiper-landscape-custom-cash', get_template_directory_uri() .'/assets/swiper/custom.css' );
					wp_enqueue_script( 'frontlash-swiper-landscape-custom-cash', get_template_directory_uri() . '/assets/swiper/custom.js', array('jquery'), null, true );
				
				elseif($post_image_orientation == 'portrait-orientation'):
							
					//wp_enqueue_style( 'frontlash-swiper-portrait-custom-cash', get_template_directory_uri() .'/assets/swiper/custom-interview.css' );
					wp_enqueue_script( 'frontlash-swiper-portrait-custom-cash', get_template_directory_uri() . '/assets/swiper/custom-interview.js', array('jquery'), null, true );
				endif;
				endif;
				
			endif;
		endif;
		
		// Show/hide shop carousel
		if (defined('FW')):
			$shop_display_choice = fw_get_db_settings_option('shop_display_choice');
			if($shop_display_choice == 'story_page' || $shop_display_choice == 'both_h_s'):
				wp_enqueue_script( 'frontlash-swiper-shop', get_template_directory_uri() . '/node_modules/swiper/dist/js/swiper.min.js', array('jquery'), null, true );
				
				//wp_enqueue_style( 'frontlash-swiper-custom-shop', get_template_directory_uri() .'/assets/swiper/custom-shop.css' );
				wp_enqueue_script( 'frontlash-swiper-custom-shop', get_template_directory_uri() . '/assets/swiper/custom-shop.js', array('jquery'), null, true );
			endif;
		endif;
		
		//wp_enqueue_style( 'frontlash-single-post-style', get_template_directory_uri() .'/assets/single/css/single-post.css' );
		wp_enqueue_script( 'frontlash-single-post-js', get_template_directory_uri() . '/assets/single/js/single-post.js', array('jquery'), null, true );
		// packery used on related posts
		wp_enqueue_script( 'frontlash-related-posts-packery', get_template_directory_uri() . '/node_modules/packery/dist/packery.pkgd.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'frontlash-related-posts-custom', get_template_directory_uri() . '/assets/related-posts/custom.js', array('jquery'), null, true );		
	
	endif; // is_sinlge () ends
	
	// Nice Smooth Scrolling Enable + Disable
	if( function_exists( 'fw_get_db_settings_option' ) && fw_get_db_settings_option('smooth-scrooling') == true ) :
		wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array( ), '1.4.4', true );
	endif;
	
	wp_enqueue_script( 'frontlash-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'frontlash-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// Custom css if needed
	require get_template_directory() . '/inc/custom-css.php';
	// Custom js if needed
	require get_template_directory() . '/inc/custom-js.php';
	// Google-analytics if used
	require get_template_directory() . '/inc/google-analytics.php';
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	if(is_page('style-index')):
		wp_enqueue_script( 'frontlash-style-index', get_template_directory_uri() . '/assets/style-index/style-index.js', array('jquery'), null, true );
	endif;
	
	wp_enqueue_script( 'frontlash-lazysizes', get_template_directory_uri() . '/node_modules/lazysizes/lazysizes.min.js', array('jquery'), null, true );
	
	// Main javascript
	wp_enqueue_script( 'frontlash-app', get_template_directory_uri() . '/static/dist/js/app.min.js', array('jquery'), null, true );
}



function load_custom_wp_admin_style() {        
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/assets/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );



/**
 * Add SVG capabilities
 */
function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
/**
 * Admin panel - link to theme options
 */
if ( !function_exists( 'frontlash_theme_options_link' ) && current_user_can('manage_options') && defined('FW')) :
    add_action( 'admin_bar_menu', 'frontlash_theme_options_link', 999 );
    function frontlash_theme_options_link( $wp_admin_bar ) {
        $args = array(
            'id'    => 'jevelin-options',
            'title' => 'The Frontlash Settings',
            'href'  => get_admin_url().'/themes.php?page=fw-settings',
        );
        $wp_admin_bar->add_node( $args );
    }
endif;

// Set first image of gallery and Video Thumbnail image as featured image
function save_video_thumbnail_to_featured_image(){
	global $post;
	$post_gallery = fw_get_db_post_option(get_the_id(), 'post-gallery');
	
	if(fw_get_db_post_option(get_the_id(),'post-video-thumbnail')):	//if video is used
		$image_url = fw_get_db_post_option(get_the_id(),'post-video-thumbnail')['url'];
		$image_attachment_id = fw_get_db_post_option(get_the_id(),'post-video-thumbnail')['attachment_id'];
		
		if ($image_attachment_id):
			set_post_thumbnail($post->ID, $image_attachment_id);
		endif;
	elseif(is_array($post_gallery) && count($post_gallery) > 0):	// if gallery has images, pick 1st one.
			$post_gallery_first_url = $post_gallery[0]['url'];
			$post_gallery_first_id = $post_gallery[0]['attachment_id'];
			
			if ($post_gallery_first_id):
				set_post_thumbnail($post->ID, $post_gallery_first_id);
			endif;
	endif;
}
/** @internal */
function _action_theme_register_required_plugins() {
	tgmpa( array(
		array(
			'name'      => 'Unyson',
			'slug'      => 'unyson',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Instagram Feed',
			'slug'      => 'instagram-feed',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Ninja Forms',
			'slug'      => 'ninja-forms',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Async JavaScript',
			'slug'      => 'async-javascript',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Heartbeat Control',
			'slug'      => 'heartbeat-control',
			'required'  => true,
			'force_activation'   => true,
		),
		
	//	array(
	//		'name'      => 'Autoptimize',
	//		'slug'      => 'autoptimize',
	//		'required'  => true,
	//		'force_activation'   => true,
	//	),
		
		//array(
		//	'name'      => 'Progressive WordPress (PWA)',
		//	'slug'      => 'progressive-wp',
		//	'required'  => true,
		//	'force_activation'   => true,
		//),
	) );

}
/*** FILTER TO REMOVE COLUMNS FROM YOAST SEO ***/
add_filter( 'manage_edit-post_columns', 'yoast_seo_admin_remove_columns', 10, 1 );
add_filter( 'manage_edit-page_columns', 'yoast_seo_admin_remove_columns', 10, 1 );
function yoast_seo_admin_remove_columns( $columns ) {
unset($columns['wpseo-score']);
unset($columns['wpseo-score-readability']);
unset($columns['wpseo-title']);
unset($columns['wpseo-metadesc']);
unset($columns['wpseo-focuskw']);
unset($columns['wpseo-links']);
unset($columns['wpseo-linked']);
return $columns;
}
function jptweak_remove_share() {
	remove_filter( 'the_content', 'sharing_display', 19 );
}

function remove_jetpack_styles() {
	wp_deregister_style('jetpack-widget-social-icons-styles'); // Social Icons
	wp_deregister_style( 'sharedaddy' );
	wp_deregister_style( 'social-logos' );
	
	wp_deregister_style( 'sb_instagram_styles' );
	wp_deregister_style( 'sb-font-awesome' );
	
	wp_deregister_style( 'fw-ext-builder-frontend-grid' );
	wp_deregister_style( 'fw-ext-forms-default-styles' );
	wp_deregister_style( 'fw-shortcode-section-background-video' );
	wp_deregister_style( 'fw-shortcode-section' );
	wp_deregister_style( 'fw-shortcode-media-image' );	
	
	wp_deregister_style( 'pwp-style' );
}
// Remove update notifications
function remove_update_notifications( $value ) {
    if ( isset( $value ) && is_object( $value ) ) {
        unset( $value->response[ 'instagram-feed/instagram-feed.php' ] );
    }
    return $value;
}
add_filter( 'site_transient_update_plugins', 'remove_update_notifications' );