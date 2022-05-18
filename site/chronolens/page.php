<?php get_header(); ?>

	<section class="default-page">
		<div class="bg">
			<span></span>
		</div>
		<div class="content-width">
			<div class="content">
				<h1><?php the_title() ?></h1>
				<div class="text-wrap">
					<?php global $more;
						while( have_posts() ) : the_post();
							$more = 1; // отображаем полностью всё содержимое поста
							the_content(); // выводим контент
						endwhile;
					?>
				</div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>