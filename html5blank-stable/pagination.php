<!-- pagination -->
<div class="col-xs-12 pagination-wrapper">
	<?php
		global $wp_query;
    	$big = 999999999;
    	echo paginate_links(array(
        	'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        	'format' => '?paged=%#%',
        	'current' => max(1, get_query_var('paged')),
        	'total' => $wp_query->max_num_pages,
        	'type' => 'list',
        	'prev_text' => __('«'),
        	'next_text' => __('»')
    	));
	?>
</div>
<!-- /pagination -->
