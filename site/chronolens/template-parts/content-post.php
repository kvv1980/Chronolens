<div class="film-item">
  <figure>
    <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url() ?>" alt=""></a>
  </figure>
  <div class="text-wrap">
    <?php $terms = get_the_terms(get_the_ID(), 'category') ?>

    <?php foreach ($terms as $term): ?>
      <h5 class="category"><?= $term->name ?></h5>
    <?php endforeach ?>

    <h6><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h6>
    <p class="year"><?= get_the_date() ?></p>
    <div class="wrap">
      <?php the_excerpt() ?>
    </div>

    <a href="<?php the_permalink() ?>" class="read-more">Read more</a>
  </div>


</div>