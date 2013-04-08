<style>#<?php echo $this->galleryName; ?>{ width: <?php echo $this->width; ?>px; height: <?php echo $this->height; ?>px; background: <?php echo $this->background; ?> }</style>
<div id="<?php echo $this->galleryName; ?>">
	<?php echo $this->renderChildren(); ?>
	<script>
		Galleria.run('#<?php echo $this->galleryName; ?>');
	</script>
</div>
