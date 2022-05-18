<?php 
if($args):
foreach($args as $key=>$arg) $$key = $arg; ?>

	<section class="consulting">
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

				<div class="text-wrap">
					<div class="left" >

						<?php if ($text): ?>	
							<p><?= $text ?></p>
						<?php endif ?>

						<?php if ($image): ?>
							<figure>
								<img src="<?= $image['url'] ?>" alt="">
							</figure>
						<?php endif ?>
						
						<ul>
							<li>

								<?php if ($name): ?>	
									<h6><?= $name ?></h6>
								<?php endif ?>

								<?php if ($mail): ?>	
									<p>
										<a href="mailto:<?= $mail ?>"><?= $mail ?></a>
									</p>
								<?php endif ?>

							</li>
							<li>

								<?php if ($social_link): ?>	
									<h6>
										<a href="<?= $social_link ?>">
											<i class="<?= $social_icon ?>"></i>
										</a>
									</h6>
								<?php endif ?>

								<?php if ($phone): ?>	
									<p>
										<a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>"><?= $phone ?></a>
									</p>
								<?php endif ?>

							</li>
						</ul>
					</div>

					<?php if ($image): ?>
						<figure data-aos-duration="2000" data-aos="fade-up" data-aos-delay="300">
							<img src="<?= $image['url'] ?>" alt="">
						</figure>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

<?php endif; ?>