<?php if(!kirby()->request()->ajax()):?>
	<?php snippet('head') ?>
<?php endif?>

<div class="<?php if(!kirby()->request()->ajax()):?>row<?php endif?>">
	<?php if(!kirby()->request()->ajax()):?>
	<?php snippet('logo') ?>
	<?php endif ?>
	<div class="main-module <?php if(!kirby()->request()->ajax()):?>col-xs-12 col-sm-12 col-md-6 col-lg-9<?php endif?>">
		<?php if(!kirby()->request()->ajax()):?>
			<?php snippet('header') ?>
		<?php endif?>
		<main class="row">
			<div class="main-content main-ecole<?php if(!kirby()->request()->ajax()):?>col-xs-12 col-sm-12 col-md-6 col-lg-8<?php endif;?>">
				<div class="content-wrapper ecole-wrapper">
					<div class="arrow-back">
						<a href="<?php echo $site->url()?>" title=""><</a>
					</div>
					<h1><?php echo $page->title()->html()?></h1>
					<div class="infos-ecoles row">
						<div class='col-xs-6'>
							<?php echo $page->adresse()->kt()?>
						</div>
						<div class='col-xs-6'>
							<?php echo $page->infos()->kt()?>
						</div>
					</div>
					<div class="calendrier">
						<h2>Calendrier école</h2>
						<?php echo $page->calendrier()->kt()?>
					</div>
					<div class="enseignement">
						<h2>Pédagogie/enseignement</h2>
						<?php echo $page->enseignement()->kt()?>
					</div>
					<div class="equipement">
						<h2>Équipement</h2>
						<?php echo $page->equipement()->kt()?>
					</div>
					<div class="temoignage">
						<h2>Témoignage</h2>
						<?php echo $page->temoignage()->kt()?>
					</div>
				</div>
				<?php if(!kirby()->request()->ajax()):?>
					<?php snippet('credits')?>
				<?php endif ?>
			</div>
			<?php if(!kirby()->request()->ajax()):?>
				<?php snippet('menu-ecole')?>
			<?php endif ?>
		</main>
	</div>
</div>


<?php if(!kirby()->request()->ajax()):?>

<?php snippet('footer') ?>
<?php endif ?>
