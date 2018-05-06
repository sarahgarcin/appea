<div class="carte-ecoles">
	<div class="carte-wrapper">
		<img src="<?php echo $site->url()?>/assets/images/carte.png" alt="Carte des écoles">
	</div>
	<?php foreach($site->index()->filterBy('intendedTemplate', 'ecole') as $ecole):?>
  	<div class="carte-nom-ecole" data-id="<?php echo $ecole->uid()?>" data-target="<?php echo $ecole->url()?>" style="top:<?php echo $ecole->positionTop()?>px; left:<?php echo $ecole->positionLeft()?>px;">
  		<a href="<?php echo $site->url()?>#<?php echo $ecole->uid() ?>" title="<?php echo $ecole->title()?>">
				<?php echo $ecole->shortname()->html()?>
			</a>
			<div class="triangle"></div>
		</div>
	<?php endforeach ?>
</div>
