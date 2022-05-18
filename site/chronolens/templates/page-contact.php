<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	<section class="film film-about film-column contact-head">
		<div class="content-width">
			<div class="bg">
				<span></span>
			</div>
			<div class="content">
				<div class="left" data-aos-duration="2000" data-aos="fade-up">
					<h1><?php the_title() ?></h1>
					<?php the_content() ?>
				</div>
				<div class="right" data-aos-duration="2000" data-aos-delay="500" data-aos="fade-up">
					<div class="item">
						<h6><?php the_field('title') ?></h6>
						<ul>
							<li><p><a href="mailto:<?php the_field('mail') ?>"><b><?php the_field('mail') ?></b></a></p></li>
							<li><p><a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_field('phone')); ?>"><b><?php the_field('phone') ?></b></a></p></li>
						</ul>

						<h6><?php the_field('title_1') ?></h6>
						<p><?php the_field('text') ?></p>
						<?= do_shortcode('[contact-form-7 id="' . get_field('form') . '" html_class="form-default"]') ?>
					</div>
					<div class="item">
						<h6><?php the_field('title_2') ?></h6>
						<p><?php the_field('text_1') ?></p>
						<div class="soc-wrap">

							<?php if( have_rows('social_links') ): ?>
							  <?php while( have_rows('social_links') ): the_row(); ?>

								<?php if ($link = get_sub_field('links')): ?>
									<p>
										<a href="<?= $link['url'] ?>" class="link"<?php if($link['target']) echo ' target="_blank"' ?>>
											<i class="<?php the_sub_field('icon') ?>"></i>
											<span><?= $link['title'] ?></span>
										</a>
									</p>
								<?php endif ?>

							  <?php endwhile; ?>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>