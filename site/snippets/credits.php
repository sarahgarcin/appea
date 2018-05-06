<footer>
	<div class="footer-wrapper row">
		<div class="logo-wrapper col-xs-12 col-sm-12 col-md-6 col-lg-2">
			<img src="<?php echo $site->url()?>/assets/images/logo-ministere.png" alt="Logo ministère de la culture">
		</div>
		<div class="logo-wrapper col-xs-12 col-sm-12 col-md-6 col-lg-2">
			<img src="<?php echo $site->url()?>/assets/images/logo-culture.png" alt="Logo culture et diversité">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
			<p class="copyright"><?php echo $site->copyright()->html()?></p>
			<ul class="footer-menu">
				<?php foreach($pages->visible()->slice(7,2) as $el):?>
					<li>
						<a href="<?php echo $el->url() ?>" title="<?php echo $el->title() ?>">
							<?php echo $el->title()->html() ?>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
			<?php echo $site->mentions()->markdown()?>	
		</div>

	</div>


</footer>