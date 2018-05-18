<footer>
	<div class="footer-wrapper row">
		<div class="col-xs-12">
			<p class="copyright"><?php echo $site->copyright()->html()?></p>
			<ul class="footer-menu">
				<?php foreach($pages->visible()->slice(8,2) as $el):?>
					<li>
						<a href="<?php echo $el->url() ?>" title="<?php echo $el->title() ?>">
							<?php echo $el->title()->html() ?>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
			<?php if($page->intendedTemplate() != "partenaires"):?>
				<?php echo $site->mentions()->markdown()?>	
			<?php endif ?>
		</div>

	</div>


</footer>