<?php if($site->homePage()->chiffres()->isNotEmpty()):?>
	<div class="chiffres">
		<?php echo $site->homePage()->chiffres()->kt()?>
	</div>
<?php endif; ?>