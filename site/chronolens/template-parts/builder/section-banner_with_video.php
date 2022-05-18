<?php 
if($args):
foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="home-head-block">

		<?php if ($bg_video): ?>
			<div class="video-bg">
				<video poster="" autoplay="true" loop muted>
					<source src="<?= $bg_video['url'] ?>" type="video/mp4">
				</video>
			</div>
		<?php endif ?>
		
		<div class="content-width">
			<div class="content">

				<?php if ($title): ?>
					<h1 data-aos-duration="2000" data-aos-delay="500" data-aos="fade-up"><?= $title ?></h1>
				<?php endif ?>
				
				<?php if ($subtitle): ?>
					<h6 data-aos-duration="2000" data-aos-delay="1000" data-aos="fade-up"><?= $subtitle ?></h6>
				<?php endif ?>

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