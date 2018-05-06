<?php snippet('head') ?>

<div class="row">
	<?php snippet('logo') ?>
	<div class="main-module col-xs-12 col-sm-12 col-md-6 col-lg-9">
		<?php snippet('header') ?>
		<main class="row">
			<div class="main-content col-xs-12 col-sm-12 col-md-6 col-lg-8">
				<div class="arrow-back">
					<a href="<?php echo $site->url()?>" title=""><</a>
				</div>
				<h2><?php echo $page->title()->html()?></h2>
				<?php echo $page->text()->kt()?>
				<?php snippet('credits')?>
			</div>
			<?php snippet('menu-ecole')?>
		</main>
	</div>
</div>




<?php snippet('footer') ?>
