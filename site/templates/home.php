<?php snippet('head') ?>
<?php $count = 0;?>
<div class="row">
		<div class="show-for-small-only mobile-header">
			<?php snippet('header') ?>	
		</div> 
		<div class="module-logo col-xs-5 col-sm-2 col-md-3 col-lg-2 hide-for-small-only">
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
	<div class="main-module col-md-offset-2 col-xlg-offset-3 col-xs-12 col-sm-9 col-md-9 col-lg-9"> 
		<div class="hide-for-small-only">
			<?php snippet('header') ?>		
		</div>
		<main class="row">
			<div class="main-content col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div class="content-wrapper">
					<?php foreach($pages->visible()->slice(0,3) as $rubrique):?>
						<?php $count ++ ?>
						<div class="rubrique<?php if($count==1):?> active<?php endif?>" data-key=<?php echo $count?>>
							<h2 id="<?php echo $rubrique->uid()?>">
								<?php echo $rubrique->title()->html() ?>
							</h2>
							<?php if($rubrique->docs()->isNotEmpty()):?>
								<?php $filenames = $rubrique->docs()->split(',');
						    if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
						    $files = call_user_func_array(array($rubrique->files(), 'find'), $filenames);?>
						    <div class="rubrique-inner">
								  <div class="rubrique-content">
								  	<?php echo $rubrique->text()->kt() ?>
								  </div>

								  <ul class="docs row">
								  	<h3 class="col-xs-12">Documents à télécharger</h3>
								    <?php foreach($files as $file):?>
								    <li class="col-xs-4">
									  	<a href="<?php echo $file->url()?>" title="<?php echo $file->url()?>" target="_blank">
									  		<img src="<?php echo $site->url()?>/assets/images/pdf.png" alt="document" width="24" >
									  		<?php echo $file->name()?>
									  	</a>
										</li>
								    <?php endforeach ?>
								  </ul>
							  </div>
							<?php elseif($rubrique->questions()->isNotEmpty()):?>
								<div class='row rubrique-inner'>
									<div class="questions col-xs-4">
										<?php foreach($rubrique->questions()->toStructure() as $key=>$question): ?>
											<h3 class='<?php if($key == 0){?>active<?php }?>' data-key=<?php echo $key ?>><?php echo $question->title()->html()?></h3>
										<?php endforeach ?>
										
									</div>
									<div class="reponses col-xs-8">
										<?php foreach($rubrique->questions()->toStructure() as $key=>$question): ?>
											<div class="response-wrapper<?php if($key == 0){?> active<?php }?>" data-key=<?php echo $key ?>>
												<?php echo $question->text()->kt()?>
											</div>
										<?php endforeach ?>
										
									</div>
								
								</div>
							<?php else:?>
								<div class="rubrique-inner">
									<?php snippet('carte'); ?>
									<?php echo $rubrique->text()->kt() ?>
								</div>
							<?php endif?>

							
						</div>
					<?php endforeach; ?>
				</div>
				<?php snippet('credits')?>
			</div>
			<div class="module-menu-ecole col-xs-6 col-sm-4 col-md-4 col-lg-3 col-md-offset-6 col-xlg-offset-5 hide-for-small-only">
				<?php snippet('menu-ecole')?>		
			</div>
		</main>
	</div>
</div>




<?php snippet('footer') ?>
