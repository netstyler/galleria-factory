<style>#<?php echo $this->getFactory()->galleryName; ?>{ width: <?php echo $this->width; ?>px; height: <?php echo $this->height; ?>px; background: <?php echo $this->background; ?> }</style>
<div id="<?php echo $this->getFactory()->galleryName; ?>">
	<?php echo $this->renderChildren(); ?>
</div>
