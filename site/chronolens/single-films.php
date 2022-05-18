<?php get_header(); ?>

	<section class="films-detail-head">
		<div class="bg">
			<img src="<?php the_post_thumbnail_url() ?>" alt="">
		</div>
		<div class="content-width">

			<div class="content">
				<h1><?php the_title() ?></h1>
			</div>

			<?php if (get_field('video')): ?>
				<div class="play-wrap">
					<a data-fancybox href="<?php the_field('video') ?>">
						<span class="round"><i class="fas fa-play"></i></span>
						<span>PLAY TRAILER</span>
					</a>
				</div>
			<?php endif ?>
			
			<div class="bottom">
				<div class="btn-wrap">
					<a href="#" class="next-display">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon-1.svg" alt="">
					</a>
					<ul>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#director">DIRECTOR</a></li>
						<li><a href="#festivals">FESTIVALS</a></li>
					</ul>
				</div>

			</div>
			<ul class="soc">
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
			</ul>
		</div>
	</section>


	<section class="film film-about film-column" id="about">
		<div class="content-width">
			<div class="content">
				<div class="left" >
					<h2><?php the_field('title') ?></h2>
					<p><?php the_field('text') ?></p>

					<?php if ($link = get_field('contact_link')): ?>
						<div class="link-wrap">
							<a href="<?= $link['url'] ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?><img src="<?php bloginfo('template_directory'); ?>/img/icon-2.svg" alt=""></a>
						</div>
					<?php endif ?>

					<?php if (get_field('trailer_video')): ?>
						<div class="video-btn">
							<a data-fancybox href="<?php the_field('trailer_video') ?>">
								<span class="round"><i class="fas fa-play"></i></span>
								<span>PLAY TRAILER</span>
							</a>
						</div>
					<?php endif ?>
					
				</div>
				<div class="right">
					<div class="item">
						<h6><?php the_field('title_1') ?></h6>
						<?php the_field('info') ?>
					</div>

					<?php if (get_field('image')): ?>
						<div class="item">
							<figure>
								<img src="<?= get_field('image')['url'] ?>" alt="">
							</figure>
						</div>
					<?php endif ?>
					
				</div>
			</div>
		</div>
	</section>

	<section class="film film-versions film-column">
		<div class="content-width">
			<div class="bg">
				<span></span>
			</div>
			<div class="content">
				<div class="left" >
					<h2><?php the_field('title_2') ?></h2>
					<p><?php the_field('text_1') ?></p>
				</div>
				<div class="right" data-aos-duration="2000" data-aos-delay="500" data-aos="fade-up">

					<?php if( have_rows('versions') ): ?>
					  <?php while( have_rows('versions') ): the_row(); ?>

						<div class="item">
							<a data-fancybox href="<?php the_sub_field('video') ?>">
								<figure>
									<img src="<?= get_sub_field('image')['url'] ?>" alt="">
								</figure>
								<p><?php the_sub_field('title') ?></p>
							</a>
						</div>

					  <?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

	<section class="film film-director film-column" id="director">
		<div class="content-width">
			<div class="content">
				<div class="left" >
					<h2><?php the_field('title_3') ?></h2>
					<h6><?php the_field('name') ?></h6>
					<ul>

						<?php if (get_field('mail')): ?>
							<li><a href="mailto:<?php the_field('mail') ?>"><?php the_field('mail') ?></a></li>
						<?php endif ?>

						<?php if (get_field('phone')): ?>
							<li><a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_field('phone')); ?>"><?php the_field('phone') ?></a></li>
						<?php endif ?>
						
						<?php if (get_field('link')): ?>
						<li><a href="<?php the_field('link') ?>"><i class="fab fa-linkedin"></i></a></li>
						<?php endif ?>
						
					</ul>

				</div>
				<div class="right" >
					<div class="item"><?php the_field('text_2') ?></div>
					<div class="item">
						<figure>
							<img src="<?= get_field('photo')['url'] ?>" alt="">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="film film-festival" id="festivals">
		<div class="content-width">
			<div class="bg">
				<span></span>
			</div>
			<div class="content">
				<div class="left" >

				</div>
				<div class="right" >
					<div class="item">
						<h2><?php the_field('title_4') ?></h2>
					</div>
					<div class="item"><?php the_field('text_3') ?></div>
				</div>
			</div>
		</div>
	</section>

	<section class="film film-stills ">
		<div class="content-width">
			<div class="content">
				<div class="left" >
					<h2><?php the_field('title_5') ?></h2>
					<p><?php the_field('text_4') ?></p>
				</div>
				<div class="right" >

					<?php $images = get_field('gallery');
					if($images): ?>
					<?php foreach($images as $image): ?>

						<div class="item">
							<a href="<?php echo esc_url($image['url']); ?>" data-fancybox="images" data-caption="images">
								<img src="<?php echo esc_url($image['url']); ?>" alt="" />
							</a>
						</div>

					<?php endforeach; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>