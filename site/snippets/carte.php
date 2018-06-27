<div class="carte-ecoles hide-for-small-only">
	<div class="carte-wrapper">
		<img src="<?php echo $site->url()?>/assets/images/carte.jpg" alt="Carte des écoles">
	</div>
	<?php foreach($site->index()->filterBy('intendedTemplate', 'ecole') as $ecole):?>
  	<div class="carte-nom-ecole" data-id="<?php echo $ecole->uid()?>" data-target="<?php echo $ecole->url()?>" style="margin-top:<?php echo $ecole->positionTop()?>%; margin-left:<?php echo $ecole->positionLeft()?>%;">
  		<a href="<?php echo $site->url()?>#<?php echo $ecole->uid() ?>" title="<?php echo $ecole->title()?>">
				<?php echo $ecole->shortname()->html()?>
			</a>
			<div class="triangle"></div>
		</div>
	<?php endforeach ?>
</div>

<div class="carte-ecoles show-for-small-only">
	<div class="carte-wrapper">
		<img src="<?php echo $site->url()?>/assets/images/carte-naked-mobile.png" alt="Carte des écoles">
	</div>
	<?php foreach($site->index()->filterBy('intendedTemplate', 'ecole') as $ecole):?>
  	<div class="carte-nom-ecole" data-id="<?php echo $ecole->uid()?>" data-target="<?php echo $ecole->url()?>" style="margin-top:<?php echo $ecole->positionTopMobile()?>%; margin-left:<?php echo $ecole->positionLeftMobile()?>%;">
  		<a href="<?php echo $site->url()?>#<?php echo $ecole->uid() ?>" title="<?php echo $ecole->title()?>">
				<?php echo $ecole->shortname()->html()?>
			</a>
			<div class="triangle"></div>
		</div>
	<?php endforeach ?>
</div>
