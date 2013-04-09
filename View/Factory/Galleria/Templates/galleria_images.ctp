<?php //debug(json_encode($this->images)); exit; ?>

<script>
	var <?php echo $this->getFactory()->galleryData; ?> = <?php echo json_encode($this->images); ?>;
</script>
<?php
//foreach ($this->images as $image) {
//	echo $this->HtmlHelper->image($image['file'], array(
//		'data-title' => $image['title'],
//		'data-description' => $image['description'],
//	));
//}