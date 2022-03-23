<header class="module-menu">
	<input type="checkbox" id="hamburger"/>
	<label class="menuicon" for="hamburger">
	  <span></span>
	</label>
	<ul class="menu">
		<?php foreach($pages->visible()->slice(3,5) as $el):?>
			<?php if($el->hasVisibleChildren()):
				$link = "#";
				else:
					$link = $el->url();
			endif; ?>
	  	<li class="menu-el<?php e($el->isOpen(), ' active') ?>">
	  		<a href="<?php echo $link ?>" title="<?php echo $el->title()?>" data-menu="<?php echo $el->uri()?>">
					<?php echo $el->title()->html()?>
				</a>
				<?php if($el->hasChildren()):?>
						<ul class="submenu">
							<?php foreach($el->children()->visible() as $child):?>
								<li <?php e($child->isOpen(), ' class="active"') ?>>
									<?php if($child->intendedTemplate() == "pdf"):?>
										<?php if($child->pdf()->isNotEmpty()):?>
											<a href="<?php echo $child->pdf()->toFile()->url()?>" title="<?php echo $child->title()?>" target="_blank">
												<?php echo $child->title()->html()?>
											</a>
										<?php endif; ?>
									<?php else: ?>
										<a href="<?php echo $child->url()?>" title="<?php echo $child->title()?>">
											<?php echo $child->title()->html()?>
										</a>
									<?php endif?>
								</li>
							<?php endforeach ?>
						</ul>
				<?php endif ?>
			</li>
			<?php endforeach ?>
			<?php snippet('social') ?>
	</ul>
	<div class="empty-submenu"></div>
</header>