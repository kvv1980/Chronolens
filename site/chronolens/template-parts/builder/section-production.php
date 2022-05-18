<?php 
if($args):
foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="production">
		<div class="content-width">
			<div class="bg">
				<span></span>
			</div>
			<div class="content">

				<?php if ($title): ?>
					<div class="title" >
						<h2><?= $title ?></h2>
					</div>
				<?php endif ?>
				
				<?php if ($text): ?>
					<div class="text-wrap" ><?= $text ?></div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

<?php endif; ?>