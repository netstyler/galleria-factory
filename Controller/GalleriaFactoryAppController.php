<?php

class GalleriaFactoryAppController extends AppController {
	/**
	 * Controller name.
	 *
	 * @var string
	 */
	public $name = 'GalleriaFactoryApp';
	/**
	 * Helpers
	 *
	 * @var array
	 */
	public $helpers = array(
		'Ctk.Factory' => array(
			'factories' => array(
				'Ctk.Html',
				'Ctk.Css',
				'GalleriaFactory.Galleria' => array(
					'assets' => true
				)
			)
		)
	);
}