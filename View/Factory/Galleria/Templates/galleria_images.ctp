<?php
foreach ($this->images as $image) {
	echo $this->HtmlHelper->image($image['file'], array(
		'data-title' => $image['title'],
		'data-description' => $image['description'],
	));
}