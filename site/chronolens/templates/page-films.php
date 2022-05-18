<?php
/*
Template Name: Films
*/
?>

<?php get_header(); ?>

	<section class="films-head">
		<div class="content-width">
			<div class="bg">
				<span></span>
			</div>
			<div class="content">
				<div class="video-wrap">
					<iframe src="<?php the_field('vimeo_video') ?>?&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					<div class="info">
						<p class="year"><?php the_field('year') ?></p>
						<p><?php the_field('text') ?></p>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="btn-wrap">
					<a href="#" class="next-display">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon-1.svg" alt="">
						<span>SEE MORE PROJECTS</span>
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

	<?php 
	$terms = get_terms( [
		'taxonomy' => 'categories_films',
		'hide_empty' => false,
	] );
	?>

	<?php foreach ($terms as $term): ?>
		<section class="film film-completed">
			<div class="content-width">
				<div class="content">
					<div class="left" >
						<h2><?= $term->name ?></h2>
						<p><?= $term->description ?></p>
					</div>
					<div class="right" data-aos-duration="2000" data-aos-delay="500" data-aos="fade-up">

						<?php $wp_query = new WP_Query(array('post_type' => 'films', 'tax_query' => array(array('taxonomy' => 'categories_films', 'field' => 'id', 'terms' => $term->term_id)), 'orderby' => 'date', 'order' => 'DESC', 'paged' => get_query_var('paged')));
						while ($wp_query->have_posts()): $wp_query->the_post(); ?>

							<?php get_template_part('template-parts/content', 'film') ?>

						<?php endwhile; ?>
						<?php wp_reset_query(); ?>

					</div>
				</div>
			</div>
		</section>
	<?php endforeach ?>
	
<?php get_footer(); ?>