<?php
$gallery = $this->Factory->Galleria->Gallery();
$gallery->add($this->Factory->Galleria->Theme(array(
	'theme' => 'classic'
)));
$gallery->add($this->Factory->Galleria->Configure(array(
	'options' => array(
		'lightbox' => 'true',
		'showCounter' => 'false',
		'autoplay' => '4000', // will move forward every 1 seconds
	)
)));

$images = $this->Factory->Galleria->Images(array(
	'images' => array(
		array(
			'file' => '/galleria_factory/img/demo01.jpg',
			'title' => 'title 1',
			'description' => 'description 1'
		),
		array(
			'file' => '/galleria_factory/img/demo02.jpg',
		),
		array(
			'file' => '/galleria_factory/img/demo03.jpg',
			'title' => 'title 3',
			'description' => 'description 3'
		),
		array(
			'file' => '/galleria_factory/img/demo04.jpg',
			'title' => 'title 4',
			'description' => 'description 4'
		)
	)
));
$gallery->add($images);
echo $gallery;