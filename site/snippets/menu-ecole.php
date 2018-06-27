<!-- <div class="module-menu-ecole col-xs-6 col-sm-3 col-md-4 col-lg-3"> -->
	<!--<h3>Choisissez une école dans la liste ci-dessous :</h3>-->
	<ul class="menu-ecole hide-for-small-only">
	<?php foreach($site->index()->filterBy('intendedTemplate', 'ecole') as $ecole):?>
  	<li data-id="<?php echo $ecole->uid()?>" <?php e($ecole->isOpen(), ' class="active"') ?> data-target="<?php echo $ecole->url()?>">
  		<a href="<?php echo $site->url()?>#<?php echo $ecole->uid() ?>" title="<?php echo $ecole->title()?>">
				<?php echo $ecole->shortname()->html()?>
			</a>
		</li>
		<?php endforeach ?>
	</ul>
<!-- </div> -->