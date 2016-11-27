<?php get_header(); ?>
<section id="home-carousel">
	<div class="container-fluid" id="carousel-container">
		<div class="carousel-item" style="background: url('<?php echo the_post_thumbnail_url('large'); ?>') center center">
			<div class="overlay-background">
				<h2>ELITE SHARING THÁNG 9</h2>
				<h1>BANKING AND FINANCE</h1>
			</div>
		</div>
	</div>
</section>
<section class="container-fluid section-container background-grey" id="main">
	<div class="container">
		<div class="row">
		<?php
			global $post;
			$post = get_post(105);
			setup_postdata($post); 
		?>
			<div class="col-sm-6 col-sm-push-6">
				<div class="section-image">
					<?php the_post_thumbnail('large'); ?>
				</div>
			</div>
			<div class="col-sm-6 col-sm-pull-6">
				<div class="section-title">
					<h2>Giới thiệu Elite WWorkshop</h2>
				</div>
				<p class="section-content">
					<?php the_content();?>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid section-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Diễn giả</h2>
				</div>
			</div>
		</div>
		<div class="row" id="members">
			<?php 

			$args = array(
					'post_type'        => 'speaker',
					'post_status'      => 'publish',
					'category_name'    => 'Elite Sharing Speakers',
					'suppress_filters' => true 
				);
				$posts_array = get_posts( $args ); 
			    global $post;
			    foreach ($posts_array as $post ):
			    	setup_postdata($post);
			?>
			<div class="col-sm-3 member-item">
				<div class="member-image">
					<?php the_post_thumbnail('profile');?>
				</div>
				<h4 class="member-name"><?php the_title(); ?></h4>
				<p class="member-position">
				<?php
							$member_id = get_the_ID();
							$member_array = get_post_meta($member_id, "Speaker Role", true);
							echo $member_array;
				?></p>
			</div>
			<?php
				endforeach;
			?>
		</div>
	</div>
</section>

<section class="container-fluid section-container background-dark">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Đăng kí tham gia</h2>
				</div>
			</div>
		</div>
		<div class="col-sm-4 col-sm-offset-4">
			<form class="register-form">
			  <div class="form-group">
			    <label for="name">Tên của bạn</label>
			    <input type="email" class="form-control" id="name">
			  </div>
			  <div class="form-group">
			    <label for="email">Email thường dùng</label>
			    <input type="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="tel">Điện thoại</label>
			    <input type="number" class="form-control" id="tel">
			  </div>
			  <button type="submit" class="btn btn-default btn-register">Đăng kí</button>
			</form>
		</div>
	</div>
</section>

<section class="container-fluid section-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Tin tức</h2>
				</div>
			</div>
		</div>

		<div class="row" id="news">
			<div class="col-sm-4 news-item">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/sample-image.jpg"></a>
				<a href="#"><h5>LOREM IPSUM</h5></a>
			</div>
			<div class="col-sm-4 news-item">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/sample-image.jpg"></a>
				<a href="#"><h5>LOREM IPSUM</h5></a>
			</div>
			<div class="col-sm-4 news-item">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/sample-image.jpg"></a>
				<a href="#"><h5>LOREM IPSUM</h5></a>
			</div>
			<div class="col-sm-4 news-item">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/sample-image.jpg"></a>
				<a href="#"><h5>LOREM IPSUM</h5></a>
			</div>
			<div class="col-sm-4 news-item">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/sample-image.jpg"></a>
				<a href="#"><h5>LOREM IPSUM</h5></a>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>




