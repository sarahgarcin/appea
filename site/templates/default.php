<?php snippet('head') ?>

<div class="row">
		<div class="module-logo col-xs-5 col-sm-2 col-md-2 col-lg-2 hide-for-small-only">
			<?php snippet('logo') ?>
		</div>
		<div class="show-for-small-only mobile-logo-ecole-menu row">
			<div class="module-logo col-xs-6">
				<?php snippet('logo') ?>
			</div>
		</div> 
		<div class="show-for-small-only mobile-header col-xs-12">
			<?php snippet('header') ?>	
		</div> 
	<div class="main-module col-sm-offset-2 col-xlg-offset-3 col-xs-12 col-sm-8 col-md-6 col-lg-9">
		<div class="hide-for-small-only">
			<?php snippet('header') ?>
		</div>
		<main class="row">
			<div class="main-content col-xs-12 col-sm-11 col-md-6 col-lg-8">
				<div class="arrow-back">
					<a href="<?php echo $site->url()?>" title=""><</a>
				</div>
				<h2><?php echo $page->title()->html()?></h2>
				<?php echo $page->text()->kt()?>
				<?php snippet('credits')?>
			</div>
			<div class="module-menu-ecole col-xs-6 col-sm-4 col-md-4 col-lg-3 col-sm-offset-7 col-md-offset-7 col-xlg-offset-5 hide-for-small-only">
				<?php snippet('menu-ecole')?>
			</div>
		</main>
	</div>
</div>




<?php snippet('footer') ?>
