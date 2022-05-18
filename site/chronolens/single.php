<?php get_header(); ?>

	<section class="single">
		<div class="bg">
			<span></span>
		</div>
		<div class="content-width">
      <div class="title-wrap">
        <div class="title">
          <?php $terms =  get_the_terms(get_the_ID(), 'category') ?>

          <?php foreach ($terms as $term): ?>
            <p class="category"><?= $term->name ?></p>
          <?php endforeach ?>
          
          <h1><?php the_title() ?></h1>
          <?php $author_id = get_post_field('post_author', get_the_ID()); ?>
          <p>
            <?php if (get_the_author_meta('first_name', $author_id) || get_the_author_meta('last_name', $author_id)): ?>
              by <?php echo get_the_author_meta('first_name', $author_id) . ' ' . get_the_author_meta('last_name', $author_id) . '. '; ?>
            <?php endif ?>
            Posted on <?= get_the_date() ?></p>
        </div>
        <figure>
          <img src="<?php the_post_thumbnail_url() ?>" alt="">
        </figure>
      </div>
      <div class="content"><?php the_content() ?></div>
    </div>
	</section>
	
<?php get_footer(); ?>