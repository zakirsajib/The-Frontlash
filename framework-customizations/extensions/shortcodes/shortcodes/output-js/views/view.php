<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); } ?>
<div class="fw-output-js">
	<script type="text/javascript">
		<?php echo wp_kses_post($atts['content']); ?>
	</script>
</div>