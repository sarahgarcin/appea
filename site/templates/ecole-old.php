<?php if(!kirby()->request()->ajax()):?>
	<?php snippet('head') ?>
<?php endif?>

<div class="<?php if(!kirby()->request()->ajax()):?>row<?php endif?>">
	<?php if(!kirby()->request()->ajax()):?>
	<?php snippet('logo') ?>
	<?php endif ?>
	<div class="main-module <?php if(!kirby()->request()->ajax()):?>col-md-offset-2 col-xs-12 col-sm-12 col-md-6 col-lg-9<?php endif?>">
		<?php if(!kirby()->request()->ajax()):?>
			<?php snippet('header') ?>
		<?php endif?>
		<main class="row">
			<div class="main-content main-ecole<?php if(!kirby()->request()->ajax()):?>col-xs-12 col-sm-12 col-md-6 col-lg-8<?php endif;?>">
				<div class="content-wrapper ecole-wrapper">
					<div class="arrow-back">
						<a href="<?php echo $site->url()?>" title=""><</a>
					</div>
						<p class= "site-print show-for-print">www.appea.fr</p>
					<h1><?php echo $page->title()->html()?></h1>
					<?php if($page->pdf()->isNotEmpty()):?>
						<a class="print-ecole" target="_blank" href="<?php echo $page->pdf()->toFile()->url();?>" title="">
							<img src="<?php echo $site->url()?>/assets/images/print.svg" alt="Imprimer la fiche école">
						</a>
					<?php endif ?>
					<?php if($page->cover()->isNotEmpty()):?>
						<div class="image-wrapper">
							<img src="<?php echo $page->cover()->toFile()->url()?>" alt="<?php echo $page->title() ?>">
						</div>
					<?php endif?>
					<div class="infos-ecoles row">
						<div class='col-xs-12 col-md-6'>
							<?php echo $page->adresse()->kt()?>
						</div>
						<div class='col-xs-12 col-md-6'>
							<?php echo $page->infos()->kt()?>
						</div>
					</div>
					<?php if($page->calendrier()->isNotEmpty()):?>
						<div class="calendrier section">
							<h2><?php echo $page->parent()->titleCalendrier()->text()?></h2>
							<?php echo $page->calendrier()->kt()?>
						</div>
					<?php endif;?>
					<?php if($page->contexte()->isNotEmpty()):?>
					<div class="contexte section">
						<h2><?php echo $page->parent()->titleContexte()->text()?></h2>
						<?php echo $page->contexte()->kt()?>
					</div>
					<?php endif;?>
					<?php if($page->enseignement()->isNotEmpty()):?>
					<div class="enseignement section">
						<h2><?php echo $page->parent()->titleEnseignement()->text()?></h2>
						<?php echo $page->enseignement()->kt()?>
					</div>
					<?php endif;?>
					<?php if($page->equipement()->isNotEmpty()):?>
					<div class="equipement section">
						<h2><?php echo $page->parent()->titleEquipement()->text()?></h2>
						<?php echo $page->equipement()->kt()?>
					</div>
					<?php endif;?>
					<?php if($page->temoignage()->isNotEmpty()):?>
					<div class="temoignage section">
						<h2><?php echo $page->parent()->titleTemoignage()->text()?></h2>
						<?php echo $page->temoignage()->kt()?>
					</div>
					<?php endif;?>
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
