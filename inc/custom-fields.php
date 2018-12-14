<?php 
     if( class_exists('acf') ):?>
	<div class="credit">
		<?php if( get_field('words_&_photo_label') && get_field('words_&_photo_credit')): ?>
			<p><?php the_field('words_&_photo_label');?>: <?php the_field('words_&_photo_credit');?></p>
		<?php endif; ?>
		<?php if( get_field('styling_label') && get_field('styling_credit')): ?>
			<p><?php the_field('styling_label');?>: <?php the_field('styling_credit');?></p>
		<?php endif; ?>
		<?php if( get_field('model_label') && get_field('model_credit')): ?>
			<p><?php the_field('model_label');?>: <?php the_field('model_credit');?></p>
		<?php endif; ?>
		<?php if( get_field('hair_label') && get_field('hair_credit') ): ?>
			<p><?php the_field('hair_label');?>: <?php the_field('hair_credit');?></p>
		<?php endif; ?>
		<?php if( get_field('make_up_credit') && get_field('make_up_label') ): ?>
			<p><?php the_field('make_up_label');?>: <?php the_field('make_up_credit');?></p>
		<?php endif; ?>
		<?php if( get_field('photo_assistant_credit') && get_field('photo_assistant_label')): ?>
			<p><?php the_field('photo_assistant_label');?>: <?php the_field('photo_assistant_credit');?></p>
		<?php endif; ?>
		
		<?php if( get_field('credit_name_7') && get_field('title_7')): ?>
			<p><?php the_field('title_7');?>: <?php the_field('credit_name_7');?></p>
		<?php endif; ?>
		<?php if( get_field('credit_name_8') && get_field('title_8')): ?>
			<p><?php the_field('title_8');?>: <?php the_field('credit_name_8');?></p>
		<?php endif; ?>
		<?php if( get_field('credit_name_9') && get_field('title_9')): ?>
			<p><?php the_field('title_9');?>: <?php the_field('credit_name_9');?></p>
		<?php endif; ?>
		<?php if( get_field('credit_name_10') && get_field('title_10')): ?>
			<p><?php the_field('title_10');?>: <?php the_field('credit_name_10');?></p>
		<?php endif; ?>
		<?php if( get_field('credit_name_11') && get_field('title_11')): ?>
			<p><?php the_field('title_11');?>: <?php the_field('credit_name_11');?></p>
		<?php endif; ?>
		<?php if( get_field('credit_name_12') && get_field('title_12')): ?>
			<p><?php the_field('title_12');?>: <?php the_field('credit_name_12');?></p>
		<?php endif; ?>
		<?php if( get_field('credit_name_13') && get_field('title_13')): ?>
			<p><?php the_field('title_13');?>: <?php the_field('credit_name_13');?></p>
		<?php endif; ?>
		
		
	</div>
<?php else:?>
	<div class="credit"><p class="bg-warning">ACF plugin is inactive. Please activate it.</p></div>
<?php endif;?>