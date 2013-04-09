<script>
	Galleria.run('#<?php echo $this->getFactory()->galleryName; ?>', {
		dataSource: <?php echo $this->getFactory()->galleryData; ?>
	});
</script>