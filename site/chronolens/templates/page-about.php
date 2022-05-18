<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

	<section class="home-slider-wrap about-head">
		<div class="content-width">
			<div class="bg">
				<span></span>
			</div>
			<div class="content">
				<div class="title">
					<h1 data-aos-duration="2000" data-aos-delay="500" data-aos="fade-up"><?php the_title() ?></h1>
					<?php the_content() ?>
				</div>
				<div class="slider-wrap">
					<figure>
						<img src="<?php the_post_thumbnail_url() ?>" alt="">
					</figure>
				</div>
			</div>
			<div class="bottom">
				<div class="btn-wrap">
					<a href="#" class="next-display"><img src="<?php bloginfo('template_directory'); ?>/img/icon-1.svg" alt="">
						<span>SCROLL DOWN</span>
					</a>
				</div>

			</div>
			<ul class="soc">
				
				<?php if( have_rows('socials_footer', 'option') ): ?>
              <?php while( have_rows('socials_footer', 'option') ): the_row(); ?>

                <li>
                  <a href="<?php the_sub_field('link_soc') ?>" target="_blank">
                    <i class="<?php the_sub_field('icon_soc') ?>"></i>
                  </a>
                </li>

              <?php endwhile; ?>
            <?php endif; ?>

			</ul>
		</div>
	</section>

	<section class="partners">
		<div class="bg">
			<span></span>
		</div>
		<div class="content-width">
			<div class="content">
				<h2><?php the_field('title') ?></h2>
				<div class="text-wrap"><?php the_field('text_left') ?></div>
			</div>
		</div>
	</section>

	<section class="partners partners-left">

		<div class="content-width">
			<div class="content" >
				<h2><?php the_field('title_1') ?></h2>
				<div class="text-wrap"><?php the_field('text_left_1') ?></div>
			</div>
		</div>
	</section>

	<section class="work">
		<div class="bg">
			<img src="<?= get_field('bg_image')['url'] ?>" alt="">
		</div>
		<div class="content-width">
			<div class="content">
				<h2><?php the_field('title_2') ?></h2>
				<p><?php the_field('text') ?></p>

				<?php if ($link = get_field('contact_link')): ?>
					<div class="link-wrap">
						<a href="<?= $link['url'] ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?>
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-2.svg" alt="">
						</a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>
	
<?php get_footer(); ?>