<?php get_header(); ?>
<!-- -->
<section class="container-fluid section-container" id="news-container">
<div class="row">
		<div class="col-sm-8">
			<article>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<div class="article-image">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="article-info">
					<p>
						<span class="author"><?php _e( 'By', 'html5blank' );?> <?php the_author();?> </span>
						<i class="fa fa-circle" aria-hidden="true"></i>
						<span class="date"> <?php the_time('j F, Y'); ?></span>						
					</p>
					<h1 class="article-title"><?php the_title(); ?></h1>
				</div>
				<div class="article-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php 
				endwhile;
				endif;
			?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
</div>
</section>
<?php get_footer();?>