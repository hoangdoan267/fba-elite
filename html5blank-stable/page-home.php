<?php get_header(); ?>
<section id="home-carousel">
	<div class="container-fluid" id="carousel-container">
		<div class="carousel-item" style="background: url('<?php echo the_post_thumbnail_url('large'); ?>') center center no-repeat; background-size: cover;">
			<div class="overlay-background">
				<h2>Chuỗi hoạt động Định hướng nghề nghiệp</h2>
				<h1>ELITE CAREER CENTER</h1>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid section-container">
	<div class="row">
	<?php
		global $post;
		$post = get_post(10);
		setup_postdata($post); 
	?>
		<div class="col-sm-12">
			<div class="section-title title-center">
				<h2>Chúng tôi là ai?</h2>
			</div>
			<div class="section-content content-center">
				<?php the_content(); ?>
			</div> 
		</div>
	</div>
	<div class="row" id="fba-gallery">
		<div class="col-sm-3">
			<img src="<?php echo get_template_directory_uri(); ?>/img/fba_1.png">
		</div>
		<div class="col-sm-3">
			<img src="<?php echo get_template_directory_uri(); ?>/img/fba_2.png">
		</div>
		<div class="col-sm-3">
			<img src="<?php echo get_template_directory_uri(); ?>/img/fba_3.png">
		</div>
		<div class="col-sm-3">
			<img src="<?php echo get_template_directory_uri(); ?>/img/fba_4.png">
		</div>
		<div class="col-sm-12" style="text-align: center; margin-top: 30px;">
			<a class="btn btn-default btn-more" href="<?php echo site_url()?>/fba-elite">Xem thêm</a>
		</div>
	</div>
</section>

<section class="container-fluid section-container background-grey">
	<div class="row">
	<?php
		global $post;
		$post = get_post(15);
		setup_postdata($post); 
	?>
		<div class="col-sm-6">
			<div class="section-image">
				<?php the_post_thumbnail('large'); ?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="section-title">
				<h2>Elite Career Center</h2>
			</div>
			<p class="section-content">
				<?php the_content(); ?> 
			</p>
			<a class="btn btn-default btn-detail" href="<?php the_permalink(); ?>">Xem thêm</a> 
		</div>
	</div>
</section>

<section class="container-fluid section-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Tin tức</h2>
				</div>
			</div>
		</div>

		<div class="row" id="latest-news-container">
			<div id="news">
			<?php
				$input = array(
			        'orderby'          => 'date',
			        'order'            => 'DESC',
			        'post_type'        => 'post',
			        'post_status'      => 'publish'
				);
				$newest_posts = get_posts( $input );
    			global $post;
    			foreach ($newest_posts as $post ):
    			setup_postdata($post);
			?>
				<div class="col-sm-4 news-item">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                			<?php the_post_thumbnail('thumbnail'); ?>
           			 </a>
					<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
				</div>
			<?php
				endforeach;
			?>
			</div>
			<a class="btn btn-default btn-more" href="<?php echo site_url()?>/tin-tuc">Xem thêm</a>
		</div>
</section>

<section class="container-fluid section-container background-grey">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Đối tác</h2>
				</div>
			</div>
		</div>

		<div class="row" id="partners">
			<div class="col-sm-2 col-sm-offset-4 col-xs-6 col-xs-offset-3">
				<a href="https://www.topcv.vn/">
					<img src="<?php echo get_template_directory_uri();?>/img/topcv.png">
				</a>
			</div>
			<div class="col-sm-2 col-sm-offset-0 col-xs-6 col-xs-offset-3">
				<a href="https://www.icaew.com">
					<img src="<?php echo get_template_directory_uri();?>/img/icaew.png">
				</a>
			</div>
		</div>
</section>


<section class="container-fluid section-container background-dark">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Đăng kí nhận thông tin</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-sm-push-2">
				<div class="text-center">
					<form class="form-inline subcriber-form" id="subcriber-form">
					  <div class="form-group">
					    <input type="email" class="form-control" name="subcriber-email" placeholder="Địa chỉ Email" required id="subcriber-email">
					  </div>
					  <button type="submit" class="btn btn-default btn-register">Đăng Kí</button>
					  <div id="form-loader" class='uil-rolling-css'><div><div></div><div></div></div></div>
					</form>
					<h4 class="notification-text" id="success-text">Đăng kí thành công.</h4>
					<h4 class="notification-text" id="error-text">Đã xảy ra lỗi trong quá trình đăng kí.</h4>
				</div>
			</div>
		</div>
</section>


<script type="text/javascript">
	$('#subcriber-form').on('submit', function(e) {
		$('#subcriber-form .btn-register').hide(200);
		$('#error-text').hide();
		$('#success-text').hide();
		$('#form-loader').show();
		e.preventDefault();
		$.ajax({
			url     : "<?php echo get_template_directory_uri(); ?>/ajax-add-subcriber.php",
			type    : "POST",
			data    : {'subcriber_email' : $('#subcriber-email').val() }
		})
		.done(function(res){
			if(res == 'success') {
				$('#subcriber-form').hide(200);
				$('#form-loader').hide(200);
				$('#success-text').show();
			} else {
				$('#form-loader').hide(200);
				$('#error-text').show();
			}
		})

	})
</script>

<?php get_footer();?>
