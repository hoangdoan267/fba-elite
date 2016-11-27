<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
