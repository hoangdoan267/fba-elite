<?php get_header(); ?>
<!-- -->
<section class="container-fluid section-container" id="news-container">
		<div class="col-sm-8 article-list">
		<?php

    		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$wp_query = new WP_Query(array(
			    'post_type' => 'post',
			    'post_status'      => 'publish',
			    'posts_per_page'  => 4,
			    'orderby'          => 'date',
			    'order'            => 'DESC',
			    'paged' => $paged 
			));

			if ( $wp_query->have_posts() ) :     
			    while ($wp_query->have_posts()) :  $wp_query->the_post();
			        // Get loop markup
		?>	        
			<div class="row article-item">
				<div class="col-sm-6 article-image">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('thumbnail'); // Declare pixel size you need inside the array ?>
					</a>
				</div>
				<div class="col-sm-6 article-detail">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h4>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h4>
					<p>
						<span class="author"><?php _e( 'By', 'html5blank' );?> <?php the_author();?> </span>
						<i class="fa fa-circle" aria-hidden="true"></i>
						<span class="date"> <?php the_time('j F, Y'); ?></span>						
					</p>
						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
					<a class="btn btn-default btn-more" href="<?php the_permalink(); ?>">Xem thêm</a>
					</article>
				</div>
			</div>
		<?php
			endwhile;
			wp_reset_postdata();
			get_template_part( 'pagination' );
			
		   
			endif;
			 
			// $input =  array(
			// 	'orderby'          => 'date',
		 //        'order'            => 'DESC',
		 //        'post_type'        => 'post',
		 //        'post_status'      => 'publish',
		 //        'posts_per_page'   => 2,
		 //        'paged' => $paged
	  //      );
			// global $news;
			// $news = get_posts($input);
			// global $post;
			// foreach ($news as $post):

			// 	setup_postdata($post);
		?>
<!--  -->
		
		</div>
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
</section>
<?php get_footer();?>