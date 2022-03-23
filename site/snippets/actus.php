<?php if($site->homePage()->actus()->isNotEmpty()):?>
	<div class="actualites">
		<h3>Actualités</h3>
		<?php foreach($site->homePage()->actus()->toStructure() as $actus):?>
			<div class="actualite">
				<?php echo $actus->text()->kt(); ?>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif;?>