<?php
/*
Template Name: Exhibitions
*/
?>

<?php get_header(); ?>

	<section class="film film-about film-column exhibitions-head">
		<div class="content-width">
			<div class="bg">
				<span></span>
			</div>
			<div class="content">
				<div class="left" data-aos-duration="2000" data-aos="fade-up">
					<h2><?php the_field('title') ?></h2>
					<p><?php the_field('subtitle') ?></p>

					<?php if ($link = get_field('contact_button')): ?>
						<div class="link-wrap">
							<a href="<?= $link['url'] ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?><img src="<?php bloginfo('template_directory'); ?>/img/icon-2.svg" alt=""></a>
						</div>
					<?php endif ?>

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
				<div class="right" data-aos-duration="2000" data-aos-delay="500" data-aos="fade-up">

					<?php if( have_rows('ongoing_exhibitions') ): ?>
					  <?php while( have_rows('ongoing_exhibitions') ): the_row(); ?>

							<div class="item">
								<h6><?php the_sub_field('title') ?></h6>
								<p><?php the_sub_field('description') ?></p>
								<ul class="list-icon">
									<li><img src="<?php bloginfo('template_directory'); ?>/img/icon-5-1.svg" alt=""><p><b><?php the_sub_field('date') ?></b></p></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/img/icon-5-2.svg" alt=""><?php the_sub_field('address') ?></li>
								</ul>
								<div class="btn-wrap">

									<?php if ($link = get_sub_field('link')): ?>
										<a href="<?= $link['url'] ?>" class="btn btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><span><?= $link['title'] ?></span></a>
									<?php endif ?>

									<?php if ($link = get_sub_field('fb_link')): ?>
										<p><a href="<?= $link['url'] ?>" class="link"><i class="fab fa-facebook-f"<?php if($link['target']) echo ' target="_blank"' ?>></i><span><?= $link['title'] ?></span></a></p>
									<?php endif ?>

								</div>
							</div>
							<div class="item">
								<figure>
									<img src="<?= get_sub_field('image')['url'] ?>" alt="">
								</figure>
							</div>

					  <?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

	<section class="film film-about film-column exhibitions-head exhibitions-section">
		<div class="content-width">
			<div class="line"></div>
			<div class="content">
				<div class="left" >
					<h2><?php the_field('title_1') ?></h2>
					<p><?php the_field('subtitle_1') ?></p>
				</div>
				<div class="right">

					<?php if( have_rows('recent_exhibitions') ): ?>
					  <?php while( have_rows('recent_exhibitions') ): the_row(); ?>

					  	<?php if (get_row_index() == 1): ?>
					  		<div class="item">
									<h6><?php the_sub_field('title') ?></h6>
									<p><?php the_sub_field('description') ?></p>
									<ul class="list-icon">
										<li><img src="<?php bloginfo('template_directory'); ?>/img/icon-5-1.svg" alt=""><p><b><?php the_sub_field('date') ?></b></p></li>
										<li><img src="<?php bloginfo('template_directory'); ?>/img/icon-5-2.svg" alt=""><?php the_sub_field('address') ?></li>
									</ul>
									<div class="btn-wrap">

										<?php if ($link = get_sub_field('link')): ?>
											<a href="<?= $link['url'] ?>" class="btn btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><span><?= $link['title'] ?></span></a>
										<?php endif ?>

										<?php if ($link = get_sub_field('fb_link')): ?>
											<p><a href="<?= $link['url'] ?>" class="link"><i class="fab fa-facebook-f"<?php if($link['target']) echo ' target="_blank"' ?>></i><span><?= $link['title'] ?></span></a></p>
										<?php endif ?>

									</div>
								</div>
								<div class="item">
									<figure>
										<img src="<?= get_sub_field('image')['url'] ?>" alt="">
									</figure>
								</div>
					  	<?php endif ?>

					  <?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>

			<?php if( have_rows('recent_exhibitions') ): ?>
			  <?php while( have_rows('recent_exhibitions') ): the_row(); ?>

			  	<?php if (get_row_index() > 1): ?>
			  		<div class="content">
							<div class="left" >
							</div>
							<div class="right">
					  		<div class="item">
									<h6><?php the_sub_field('title') ?></h6>
									<p><?php the_sub_field('description') ?></p>
									<ul class="list-icon">
										<li><img src="<?php bloginfo('template_directory'); ?>/img/icon-5-1.svg" alt=""><p><b><?php the_sub_field('date') ?></b></p></li>
										<li><img src="<?php bloginfo('template_directory'); ?>/img/icon-5-2.svg" alt=""><?php the_sub_field('address') ?></li>
									</ul>
									<div class="btn-wrap">

										<?php if ($link = get_sub_field('link')): ?>
											<a href="<?= $link['url'] ?>" class="btn btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><span><?= $link['title'] ?></span></a>
										<?php endif ?>

										<?php if ($link = get_sub_field('fb_link')): ?>
											<p><a href="<?= $link['url'] ?>" class="link"><i class="fab fa-facebook-f"<?php if($link['target']) echo ' target="_blank"' ?>></i><span><?= $link['title'] ?></span></a></p>
										<?php endif ?>

									</div>
								</div>
								<div class="item">
									<figure>
										<img src="<?= get_sub_field('image')['url'] ?>" alt="">
									</figure>
								</div>
							</div>
						</div>
			  	<?php endif ?>

			  <?php endwhile; ?>
			<?php endif; ?>

		</div>
	</section>

	<section class="film film-completed">
		<div class="content-width">
			<div class="content">
				<div class="left">
					<h2><?php the_field('title_2') ?></h2>
					<p><?php the_field('text') ?></p>
				</div>
				<div class="right" data-aos-duration="2000" data-aos-delay="500" data-aos="fade-up">

					<?php
					$featured_posts = get_field('films');
					if($featured_posts): ?>

					    <?php foreach($featured_posts as $post): 

				        setup_postdata($post); ?>
								
								<?php get_template_part('template-parts/content', 'film') ?>
								
					    <?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>