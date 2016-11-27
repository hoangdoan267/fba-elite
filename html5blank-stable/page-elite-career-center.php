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
<section class="container-fluid section-container" id="main">
		<div class="row">
		<?php
			global $post;
			$post = get_post(17);
			setup_postdata($post); 
		?>
			<div class="col-sm-6">
				<div class="section-image">
					<?php the_post_thumbnail('large'); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="section-title">
					<h2>Giới thiệu Career Center</h2>
				</div>
				<p class="section-content">
				<?php the_content(); 
				?>

				</p>
			</div>
		</div>
</section>

<div id="project-container">
	<?php
		$input = array(
	        'orderby'          => 'date',
	        'order'            => 'ASC',
	        'post_type'        => 'project',
	        'post_status'      => 'publish',
	        'suppress_filters' => true
		);
		$newest_posts = get_posts( $input );
		global $post;
		foreach ($newest_posts as $post ):
		setup_postdata($post);
	?>
		<section class="container-fluid section-container background-grey">
			<div class="row">
				<div class="col-sm-6">
					<div class="section-image">
						<?php the_post_thumbnail('large'); ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="section-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<p class="section-content">
						<?php the_content(); ?> 
					</p>
					<?php
							$project_id = get_the_ID();
							$cta_link = get_post_meta($project_id, "CTA Link", true);
							echo $member_array;
					?>
					<a class="btn btn-default btn-detail" href="<?php echo $cta_link; ?>">Đăng kí</a> 
				</div>
			</div>
		</section>
	<?php
		endforeach;
	?>
</div>

<section class="container-fluid section-container background-grey">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Cảm nhận</h2>
				</div>
			</div>
		</div>
		<div class="row" id="cc-testimonials">
			<?php 

				$args = array(
					'post_type'        => 'testimonial',
					'post_status'      => 'publish',
					'category_name'    => 'Elite Carrer Center Testimonials',
					'suppress_filters' => true 
				);
				$posts_array = get_posts( $args ); 
			    global $post;
			    foreach ($posts_array as $post ):
			    	setup_postdata($post);
			?>
			<div class="col-sm-6">
				<div class="cc-testimonial-item">
					<div class="cc-testimonial-quote">
						<p>
							<?php the_content(); ?>
						</p> 
					</div>
					<div class="cc-testimonial-info">
						<div class="cc-testimonial-image">
							<?php the_post_thumbnail('profile');?>
						</div>
						<h5><?php the_title(); ?></h5>
						<p><?php
							$member_id = get_the_ID();
							$member_array = get_post_meta($member_id, "Member Role", true);
							echo $member_array;
						?></p>
					</div>
				</div>
			</div>
			<?php

				endforeach;
			?>
		</div>
</section>

<section class="container-fluid section-container background-dark">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Đăng kí nhận thông tin từ Career Center</h2>
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




