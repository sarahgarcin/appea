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
			<div class="main-content main-ecole<?php if(!kirby()->request()->ajax()):?>col-xs-12 col-sm-12 col-md-6 col-lg-8<?php endif;?>">
				<div class="content-wrapper ecole-wrapper">
					<div class="arrow-back">
						<a href="<?php echo $site->url()?>" title=""><</a>
					</div>
						<p class= "site-print show-for-print">www.appea.fr</p>
					<?php snippet('carte');?>
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
					<?php if($page->videocover()->isNotEmpty()):?>
						<div class="image-wrapper">
						<?php echo $page->videocover()->kt();?>
						</div>
					<?php endif;?>
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
			<div class="module-menu-ecole col-xs-6 col-sm-4 col-md-4 col-lg-3 col-sm-offset-7 col-md-offset-7 col-xlg-offset-5 hide-for-small-only">
				<?php snippet('menu-ecole')?>		
			</div>
		</main>
	</div>
</div>


<?php if(!kirby()->request()->ajax()):?>

<?php snippet('footer') ?>
<?php endif ?>
