<?php snippet('header') ?>

	<div class="default default-page">

		<?php snippet('subheader'); ?>

		<section class="boxed-sm">
			<div class="container">
				<div class="row main">
					<div class="blog-container">
						<article class="blog-detail hentry clearfix recipe">
							<div class="print"><a href="#"><i class="fa fa-print" aria-hidden="true"></i> Print</a></div>
							<h3 class="title-blog-detail"><?= $page->title() ?></h3>

							<?php
							$tagsRaw = $page->tags();
							$postTags = [];
							if ($tagsRaw != '') {
								if (!strpos($tagsRaw, ',')) {
									$postTags[] = $tagsRaw;
								} else {
									$postTags = explode(',', $tagsRaw);
								}
							}
							$tagsValue = '';
							foreach($postTags as $tag) {
								if ($tagsValue != '') {
									$tagsValue .= ', ';
								}
								$tagsValue .= sprintf('<a href="/recipes/%s">%s</a>', url::paramsToString(['tag' => $tag]), $tag);
							}
							if ($tagsValue != '') {
								?><p class="meta">
								Posted in: <?=$tagsValue?>
								</p><?php
							}
							?>
							<div class="content post">

								<h4>Ingredients</h4>
								
								
								<?php 
									$ingredients = $page->ingredients()->kirbytext();
									if ($ingredients != ''):
										echo $ingredients;
									else:
										?><p>Please add some ingredients!</p><?php
									endif;
								?>

								<h4>Directions</h4>
									
								<?php 
									$directions = $page->directions()->kirbytext();
									if ($directions != ''):
										echo $directions;
									else: 
										?><p>Please add some cooking directions</p><?php
									endif;
								?>

								<?php if ($page->credits()->isNotEmpty()) : ?>
									<h5><em>Credit:</em></h5>
									<p><em><?= kirbytext_no_p($page->credits()) ?></em></p>
								<?php endif; ?>
									
							</div>
							
						</article>

						<nav>
							<div class="recipe-nav">
								<div class="post-control clearfix">
									<p>
										<a class="prev-post" href="/recipes/">
											<i class="fa fa-angle-left"></i>Browse all Recipes
											<!-- <h4 class="title-next-post">Recipes</h4> -->
										</a>
									</p>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</section>
	</div>
      
<?php snippet('footer') ?>