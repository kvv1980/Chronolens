<?php 
if($args):
foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-slider-wrap">
		<div class="content-width">
			<div class="bg">
				<span></span>
			</div>
			<div class="content">
				<div class="title">

					<?php if ($title): ?>
						<h1 data-aos-duration="2000" data-aos-delay="500" data-aos="fade-up"><?= $title ?></h1>
					<?php endif ?>
					
					<?php if ($subtitle): ?>
						<h6 data-aos-duration="2000" data-aos-delay="1000" data-aos="fade-up"><?= $subtitle ?></h6>
					<?php endif ?>
					
					<div class="nav-wrap" >
						<div class="swiper-button-next home-next">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-2-1.svg" alt="">
							<span>PREVIOUS WORK</span>
						</div>
						<div class="swiper-button-prev home-prev">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-2.svg" alt="">
							<span>NEXT WORK</span>
						</div>
					</div>
				</div>
				<div class="slider-wrap">
					<div class="swiper home-slider">
						<div class="swiper-wrapper">

							<?php if($works): ?>

							    <?php foreach($works as $post): 

							        setup_postdata($post); ?>

							        <div class="swiper-slide">
										<a href="<?php the_permalink() ?>">
											<figure>
												<img src="<?php the_post_thumbnail_url() ?>" alt="">
												<figcaption>
													<p class="year"><?php the_field('year') ?></p>
													<p><?php the_title() ?></p>
												</figcaption>
											</figure>
										</a>
									</div>

							    <?php endforeach; ?>
							    
							    <?php wp_reset_postdata(); ?>

							<?php endif; ?>	

						</div>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="btn-wrap">
					<a href="#" class="next-display"><img src="<?php bloginfo('template_directory'); ?>/img/icon-1.svg" alt=""></a>
				</div>
				<ul>

					<?php foreach ($links as $link): ?>
						<li>
							<a href="<?= $link['link']['url'] ?>"<?php if($link['link']['target']) echo ' target="_blank"' ?>><?= $link['link']['title'] ?></a>
						</li>
					<?php endforeach ?>

				</ul>
			</div>
			<ul class="soc">

				<?php foreach (get_field('socials_footer', 'option') as $link): ?>
					<li>
						<a href="<?= $link['link_soc'] ?>" target="_blank"><?= $link['link']['title'] ?></a>
					</li>
					<li>
						<a href="<?= $link['link_soc'] ?>">
							<i class="<?= $link['icon_soc'] ?>"></i>
						</a>
					</li>
				<?php endforeach ?>

			</ul>
		</div>
	</section>

<?php endif; ?>