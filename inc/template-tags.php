<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package FrontLash
 */

if ( ! function_exists( 'frontlash_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function frontlash_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'frontlash' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'frontlash_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function frontlash_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'frontlash' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'frontlash_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function frontlash_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'frontlash' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'frontlash' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'frontlash' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'frontlash' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'frontlash' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'frontlash' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'frontlash_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function frontlash_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :?>

		<div class="post-thumbnail">
			<a class="post-thumbnail xx" href="<?php the_permalink(); ?>" aria-hidden="true">
				<?php the_post_thumbnail('full', array(
				'alt' => the_title_attribute( array('echo' => false)),
				'class' => 'lazyload',
				'src'	=> get_the_post_thumbnail_url(get_the_ID(),'thumbnail'),
				'srcset'	=> get_template_directory_uri() .'/static/dist/img/loader1.svg',
				'data-srcset' => get_the_post_thumbnail_url(get_the_ID(),'full')
				)); ?>
			</a>
		</div><!-- .post-thumbnail -->

		<?php elseif(is_search() || is_archive()) : ?>
			<a class="post-thumbnail yy" href="<?php the_permalink(); ?>" aria-hidden="true">
				<?php
				the_post_thumbnail( 'full', array(
					'alt' => the_title_attribute( array('echo' => false)),
					'class' => 'lazyload',
					'src'	=> get_the_post_thumbnail_url(get_the_ID(),'thumbnail'),
					'srcset'	=> get_template_directory_uri() .'/static/dist/img/loader1.svg',
					'data-srcset' => get_the_post_thumbnail_url(get_the_ID(), 'full')
				));
				?>
			</a>
		<?php else : ?>
			<a class="post-thumbnail zz" href="<?php the_permalink(); ?>" aria-hidden="true">
				<?php
				the_post_thumbnail( 'full', array(
					'alt' => the_title_attribute( array('echo' => false)),
					'class' => 'lazyload',
					'src'	=> get_the_post_thumbnail_url(get_the_ID(),'thumbnail'),
					'srcset'	=> get_template_directory_uri() .'/static/dist/img/loader1.svg',
					'data-srcset' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
				));?>
			</a>
		<?php
		endif; // End
	}

endif;


if ( ! function_exists( 'frontlash_post_thumbnail_large' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function frontlash_post_thumbnail_large() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}?>
			<a class="post-thumbnail haha" href="<?php the_permalink(); ?>" aria-hidden="true">
				<?php
				the_post_thumbnail( 'full', array(
					'alt' => the_title_attribute( array('echo' => false)),
					'class' => 'lazyload',
					'src'	=> get_the_post_thumbnail_url(get_the_ID(),'thumbnail'),
					'srcset'	=> get_the_post_thumbnail_url(get_the_ID(), 'medium'),
					'data-srcset' => get_the_post_thumbnail_url(get_the_ID(),'full'),
				));
			?>	
			</a>
	<?php }
endif;?>