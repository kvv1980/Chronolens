<div class="film-item">
	<a href="<?php the_permalink() ?>">
		<figure>
			<img src="<?php the_post_thumbnail_url() ?>" alt="">
		</figure>
		<div class="text-wrap">
			<h6><?php the_title() ?></h6>
			<p><?php the_field('name_1') ?></p>
			<p class="year"><?php the_field('year') ?></p>
		</div>
	</a>
</div>