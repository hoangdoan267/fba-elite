<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		<h3>Tags</h3>
		<div class="tagcloud">
		<?php 
			wpb_tags();
		?>
		</div>
	</div>

</aside>
<!-- /sidebar -->
