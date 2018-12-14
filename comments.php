<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FrontLash
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="col-lg-12">
<div id="comments" class="comments-area col-md-6 col-md-offset-3">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$frontlash_comment_count = get_comments_number();
				if ( '1' === $frontlash_comment_count ) {
					printf( esc_html__('Comment', 'frontlash' ) );
				}else {
					printf( esc_html__('Comments', 'frontlash' ) );		
				}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'format'	=> 'html5',
				'short_ping' => true
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'frontlash' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
		
	$fields =  array(
	  'author' =>
	    '<p class="comment-form-author"><input id="author" name="author" placeholder="Name" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
	
	  'email' =>
	    '<p class="comment-form-email"><input id="email" name="email" type="email" placeholder="Email Address" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
	    
	  'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" '. $aria_req . ' placeholder="Comment"></textarea></p>',
	);
	
	// Not Login Mode
	$comments_args = array(
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        // change the title of send button 
        'label_submit'=>'Submit',
        // change the title of the reply section
        'title_reply'=>'Add Yours',
        'comment_notes_before' =>'',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '',
	);

	// Login Mode
	$log_in_comment_args = array(
		'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" '. $aria_req . ' placeholder="Comment"></textarea></p>',
		
		'label_submit'=>'Submit',
	);
	
	if(is_user_logged_in()):
		comment_form($log_in_comment_args);
	else:
		comment_form($comments_args);
	endif;
	?>

</div><!-- #comments -->
</div>