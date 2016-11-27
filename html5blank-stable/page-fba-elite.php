<?php get_header(); ?>
<section id="home-carousel">
	<div class="container-fluid" id="carousel-container">
		<div class="carousel-item" style="background: url('<?php echo the_post_thumbnail_url('large'); ?>') center center no-repeat; background-size: cover;">
			<div class="overlay-background">
				<h2> Hội sinh viên Tài năng Khoa Quản trị Kinh doanh</h2>
				<h1>FBA ELITE ASSOCIATION</h1>
			</div>
		</div>
	</div>
</section>
<section class="container-fluid section-container" id="main">
	<?php
		global $post;
		$post = get_post(10);
		setup_postdata($post); 
	?>
		<div class="row">
			<div class="col-sm-6 col-sm-push-6">
				<div class="section-image">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/j2A0kWuOFHA??autoplay=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-sm-6 col-sm-pull-6">
				<div class="section-title">
					<h2>Giới thiệu chung</h2>
				</div>
				<p class="section-content">
				<?php 
					the_content();
				?>
				</p>
			</div>
		</div>
</section>

<section class="container-fluid section-container background-grey">
	<div class="row">
	<?php
		global $post;
		$post = get_post(12);
		setup_postdata($post); 
	?>
		<div class="col-sm-6">
			<div class="section-image">
				<?php the_post_thumbnail('large'); ?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="section-title">
				<h2>Mục tiêu</h2>
			</div>
			<p class="section-content">
				<?php the_content(); ?> 
			</p> 
		</div>
	</div>
</section>

<section class="container-fluid section-container background-dark">
	<div class="row">
	<?php
		global $post;
		$post = get_post(25);
		setup_postdata($post); 
	?>
		<div class="col-sm-12">
			<div class="section-title title-center">
				<h2>Giá trị cốt lõi</h2>
			</div>
			<div class="section-content content-center">
				<?php the_content(); ?>
			</div> 
		</div>
	</div>
</section>

<section class="container-fluid section-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Thành viên</h2>
				</div>
			</div>
		</div>
		<div class="row" id="members">
			<?php 

			$args = array(
				'post_type'        => 'member',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			$posts_array = get_posts( $args ); 
		    global $post;
		    foreach ($posts_array as $post ):
			?>
			<div class="col-sm-3 member-item">
				<div class="member-image">
					<?php the_post_thumbnail('profile');?>
				</div>
				<h4 class="member-name"><?php the_title(); ?></h4>
				<p class="member-position">
					<?php
						$member_id = get_the_ID();
						$member_array = get_post_meta($member_id, "Member Role", true);
						echo $member_array;
					?>
				</p>
			</div>
			<?php
				endforeach;
			?>
		</div>
</section>

<section class="container-fluid section-container background-grey">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title-center">
					<h2>Cảm nhận</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2" id="testimonials">
			<?php 

			$args = array(
					'post_type'        => 'testimonial',
					'post_status'      => 'publish',
					'category_name'    => 'FBA Elite Testimonials',
					'suppress_filters' => true 
				);
				$posts_array = get_posts( $args ); 
			    global $post;
			    foreach ($posts_array as $post ):
			    	setup_postdata($post);
			?>
				<div class="testimonial-item">
					<div class="testimonial-quote">
						<p>
							<?php the_content(); ?>
						</p> 
					</div>
					<div class="testimonial-member">
						<div class="row">
							<div class="col-sm-2 col-xs-3">
								<?php the_post_thumbnail('profile'); ?>
							</div>
							<div class="col-sm-3">
								<div class="testimonial-member-info">
									<h5><?php the_title(); ?></h5>
									<p>					
									<?php
										$member_id = get_the_ID();
										$member_array = get_post_meta($member_id, "Member Role", true);
										echo $member_array;
									?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php 
				endforeach;
			?>
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
<?php get_footer();?>




