<?php get_header(); ?>
<!-- -->
<section class="container-fluid section-container" id="news-container">
<div class="row">
		<div class="col-sm-8 article-list">
			<?php get_template_part('loop'); ?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
</div>
</section>
<?php get_footer();?>
