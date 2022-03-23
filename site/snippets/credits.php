<footer>
	<div class="footer-wrapper row">
		<div class="col-xs-12">
			<?php if($site->construction()->isNotEmpty()):?>
				<div class="construction">
					<p style="font-size:13px; font-style: italic; margin-top: 0;"><?php echo $site->construction()->html()?></p>
				</div>
			<?php endif ?>
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
				<?php echo $site->mentions()->kt()?>	
			<?php endif ?>
		</div>

	</div>


</footer>