<?php 
if($args):
foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="work" id="work">

		<?php if ($bg_image): ?>
			<div class="bg">
				<img src="<?= $bg_image['url'] ?>" alt="">
			</div>
		<?php endif ?>
		
		<div class="content-width">
			<div class="content" data-aos-duration="2000" data-aos="fade-up">

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>

				<?php if ($text): ?>
					<?= $text ?>
				<?php endif ?>
				
				<?php if ($contact_button): ?>
					<div class="link-wrap">
						<a href="<?= $contact_button['url'] ?>"<?php if($contact_button['target']) echo ' target="_blank"' ?>><?= $contact_button['title'] ?>
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-2.svg" alt="">
						</a>
					</div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

<?php endif; ?>