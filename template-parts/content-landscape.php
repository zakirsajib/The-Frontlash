<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
				<div class="landscape-section">	
					<div class="container">	
						<div class="title-thumb">
							<div class="col-title">
								<?php frontlash_cat_tags();?>	
								<header class="post-entry-header">
									<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
								</header>
								<div class="entry-summary">
									<?php the_excerpt();?>
								</div>	
								<div class="excerpt-readmore">
									<a href="<?php the_permalink()?>" rel="nofollow">Read More</a>
								</div>
							</div>
							<div class="col-thumb"><div class="post-thumbnail"><?php frontlash_post_thumbnail(); ?></div></div>
						</div>
					</div>
				</div>
			</article>