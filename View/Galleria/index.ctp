<?php
$gallery = $this->Factory->Galleria->Init();

$images = $this->Factory->Galleria->Images(array(
	'images' => array(
		array(
			'file' => '/galleria_factory/img/demo01.jpg'
		),
		array(
			'file' => '/galleria_factory/img/demo02.jpg'
		),
		array(
			'file' => '/galleria_factory/img/demo03.jpg'
		),
		array(
			'file' => '/galleria_factory/img/demo04.jpg'
		)
	)
));
$gallery->add($images);
echo $gallery;