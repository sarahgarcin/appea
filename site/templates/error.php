<?php snippet('head') ?>

<div class="row">
	<div class="show-for-small-only mobile-header">
		<?php snippet('header') ?>	
	</div> 
<div class="module-logo col-xs-2 col-md-3 col-lg-2 hide-for-small-only">
		<?php snippet('logo') ?>
	</div>
	<div class="show-for-small-only mobile-logo-ecole-menu row">
		<div class="module-logo col-xs-5">
			<?php snippet('logo') ?>
		</div>
		<div class="module-menu-ecole col-xs-6">
			<?php snippet('menu-ecole')?>
		</div>
	</div> 
	<div class="main-module col-md-offset-2 col-xlg-offset-3 col-xs-12 col-sm-12 col-md-6 col-lg-9">
		<div class="hide-for-small-only">
			<?php snippet('header') ?>
		</div>
		<main class="row">
			<div class="main-content col-xs-12 col-sm-12 col-md-6 col-lg-8">
				<div class="arrow-back">
					<a href="<?php echo $site->url()?>" title=""><</a>
				</div>
				<h2><?php echo $page->title()->html()?></h2>
				<div class="panel">
					<h4>Jouez avec [ HAUT ] et [ BAS ]</h4>
				</div>
				<div id="pong">
					
				</div>
				<hr>
				<?php snippet('credits')?>
			</div>
			<div class="module-menu-ecole col-xs-6 col-sm-4 col-md-4 col-lg-3 col-md-offset-6 col-xlg-offset-5 hide-for-small-only">
				<?php snippet('menu-ecole')?>
			</div>
		</main>
	</div>
</div>


<script src="assets/js/Pong.js" type="text/javascript"></script>

<?php snippet('footer') ?>
