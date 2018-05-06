<?php snippet('head') ?>
<?php $count = 0;?>
<div class="row">
	<?php snippet('logo') ?>
	<div class="main-module col-xs-12 col-sm-12 col-md-6 col-lg-9">
		<?php snippet('header') ?>
		<main class="row">
			<div class="main-content col-xs-12 col-sm-12 col-md-6 col-lg-8">
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
						    <div class="row rubrique-inner">
							    <ul class="docs col-xs-4">
								    <?php foreach($files as $file):?>
								    <li>
									  	<a href="<?php echo $file->url()?>" title="<?php echo $file->url()?>" target="_blank">
									  		<img src="<?php echo $site->url()?>/assets/images/pdf.png" alt="document" width="24" >
									  		<?php echo $file->name()?>
									  	</a>
										</li>
								    <?php endforeach ?>
								  </ul>
								  <div class="rubrique-content col-xs-8">
								  	<?php echo $rubrique->text()->kt() ?>
								  </div>
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
			<?php snippet('menu-ecole')?>
		</main>
	</div>
</div>




<?php snippet('footer') ?>
