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
				<div class="panel">
					<h4>Jouez avec [ HAUT ] et [ BAS ]</h4>
				</div>
				<div id="pong">
					
				</div>
				<hr>
				<?php snippet('credits')?>
			</div>
			<?php snippet('menu-ecole')?>
		</main>
	</div>
</div>


<script src="assets/js/Pong.js" type="text/javascript"></script>

<?php snippet('footer') ?>
