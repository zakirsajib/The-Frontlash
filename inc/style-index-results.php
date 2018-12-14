<?php 

add_shortcode( 'frontlashstyleindexresults', 'frontlash_styleindex_results' );

function frontlash_styleindex_results($atts){
	ob_start();
?>

<div class="col-lg-6">
			<div class="filter-results col-lg-12"><h4>Results</h4></div>
			<?php $social_custom = fw_get_db_settings_option('social_custom');
				$total_count = count($social_custom);
			?>
			
			<div class="col-lg-12">
				<?php 
					if($total_count > 0):
						for( $x=0; $x <= $total_count; $x++ ):
							$brand_name=  $social_custom[$x]['style_index_brand_name'];
							
							for($y=0; $y <= count($social_custom[$x]['style_index_value_name']); $y++ ):
								$values .= $social_custom[$x]['style_index_value_name'][$y] .' ';
							endfor;
						
							echo '<div class="filterDiv '.$values.'">'.$brand_name.'</div>';
						
							unset($values);	
						endfor;
					else:
						echo 'No Results found. Please add some!';
					endif;?>

			</div>
		</div>
<?php return ob_get_clean(); 
} ?>