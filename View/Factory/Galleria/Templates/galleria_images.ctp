<?php
foreach ($this->images as $image) {
	echo $this->HtmlHelper->image($image['file']);
}