<?php 
if($args):
foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="film" id="films">
		<div class="content-width">
			<div class="content">
				<div class="left" >

					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?php if ($text): ?>
						<?= $text ?>
					<?php endif ?>
					
					<?php if ($view_button): ?>
						<div class="link-wrap">
							<a href="<?= $view_button['url'] ?>"<?php if($view_button['target']) echo ' target="_blank"' ?>><?= $view_button['title'] ?>
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-2.svg" alt="">
						</a>
						</div>
					<?php endif ?>
					
				</div>
				<div class="right" data-aos-duration="2000" data-aos-delay="500" data-aos="fade-up">

					<?php if($films): ?>

					    <?php foreach($films as $post): 

					        setup_postdata($post); ?>

							<?php get_template_part('template-parts/content', 'film') ?>

					    <?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); ?>

					<?php endif; ?>	

				</div>
			</div>
		</div>
	</section>

<?php endif; ?>