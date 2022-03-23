<!-- <div class="module-logo col-xs-5 col-sm-2 col-md-3 col-lg-3"> -->
	<div class="logo-wrapper col-xs-10 col-sm-8 col-md-6 col-xlg-5 hide-for-print hide-for-small-only">
	  <a href="<?php echo $site->url()?>" title="<?php echo $site->title()?>">
	  	<img src="<?php echo $site->logo()->toFile()->url()?>" alt="Logo APPEA">
	  </a>
	</div>
	<div class="docs-btn-wrapper col-xs-12 col-sm-11 col-md-8 col-xlg-7 hide-for-print">
	  <?php foreach($site->homePage()->docs()->toStructure() as $documents):?>
	  	<div class="doc-btn">
	  		<a href="<?php echo $documents->doc()->url()?>" title="<?php echo $documents->doc()->text()?>"><?php echo $documents->text()?></a>
	  	</div>
	  <?php endforeach; ?>
	</div>

	<div class="logo-wrapper col-xs-12 show-for-small-only">
	  <a href="<?php echo $site->url()?>" title="<?php echo $site->title()?>">
	  	<img src="<?php echo $site->url()?>/assets/images/Logo_Block-light.png" alt="Logo APPEA">
	  </a>
	</div>
	<div class="logo-wrapper col-xs-12 show-for-print">
	  <a href="<?php echo $site->url()?>" title="<?php echo $site->title()?>">
	  	<p class="ecole-name-ajax"></p>
	  	<img src="<?php echo $site->logosquare()->toFile()->url()?>" alt="Logo APPEA">
	  </a>
	</div>
<!-- </div> -->
