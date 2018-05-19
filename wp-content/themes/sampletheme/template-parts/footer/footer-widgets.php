<aside class="widget-area" role="complementary">
	<?php
	if ( is_active_sidebar( 'footer-1' ) ) { ?>
		<div class="widget-column footer-widget-1">
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>
	<?php }
	if ( is_active_sidebar( 'footer-2' ) ) { ?>
		<div class="widget-column footer-widget-2">
			<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>
	<?php } ?>
</aside><!-- .widget-area -->