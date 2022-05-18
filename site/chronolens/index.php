<?php get_header(); ?>

	<section class="film news">
		<div class="content-width">
			<div class="content">
				<div class="title-wrap">
          <h1><?= get_the_title(290) ?></h1>
        </div>
				<div class="right">

          <div class="tabs">
            <ul class="tabs-menu">
              <li>All</li>

              <?php 
              $terms = get_terms( [
                'taxonomy' => 'category',
              ] ); 
              ?>

              <?php foreach ($terms as $term): ?>
                <li><?= $term->name ?></li>
              <?php endforeach ?>
              
            </ul>
            <div class="tab-content">
              <div class="tab-item">
                <?php if ( have_posts() ) :
                  while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part('template-parts/content', 'post') ?>

                  <?php endwhile; ?>
                <?php endif; ?>
              </div>

              <?php foreach ($terms as $term): ?>
                <div class="tab-item">
                  <?php $wp_query = new WP_Query(array('post_type' => 'post', 'cat' => $term->term_id, 'orderby' => 'date', 'order' => 'DESC', 'paged' => get_query_var('paged')));
                    while ($wp_query->have_posts()): $wp_query->the_post(); ?>

                      <?php get_template_part('template-parts/content', 'post') ?>

                    <?php endwhile; ?>
                  <?php wp_reset_query(); ?>
                </div>
              <?php endforeach ?>
              
            </div>
          </div>
        </div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>