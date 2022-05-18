<?php 
if($args):
foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="partners">
		<div class="bg">
			<span></span>
		</div>
		<div class="content-width">
			<div class="content">
				
				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>

				<?php if ($text): ?>
					<div class="text-wrap">
						<?= $text ?>
					</div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

<?php endif; ?>