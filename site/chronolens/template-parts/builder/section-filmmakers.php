<?php 
if($args):
foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="filmmakers" id="filmmakers">
		<div class="content-width">
			<div class="content">
				<div class="left" >

					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?php if ($text): ?>
						<?= $text ?>
					<?php endif ?>

					<?php if ($button): ?>
						<div class="link-wrap">
							<a href="<?= $button['url'] ?>"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?>
								<img src="<?php bloginfo('template_directory'); ?>/img/icon-2.svg" alt="">
							</a>
						</div>
					<?php endif ?>
					
				</div>
				<div class="right">

					<?php foreach ($list as $row): ?>
						<div class="item" data-aos-duration="2000" data-aos="fade-up">
							<figure>
								<img src="<?= $row['image']['url'] ?>" alt="">
							</figure>
							<div class="text-wrap">
								<p><?= $row['name'] ?></p>
							</div>
						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>