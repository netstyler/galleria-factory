<?php
/**
 * Factory for Galleria.io gallery jquery plugin.
 *
 * PHP 5
 *
 * Cake Toolkit (http://caketoolkit.org)
 * Copyright 2013, James Watts (http://github.com/jameswatts)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2013, James Watts (http://github.com/jameswatts)
 * @link          http://caketoolkit.org Cake Toolkit
 * @package       CakeFactory.View.Factory
 * @since         CakePHP(tm) v 2.2.0.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('CtkBuildable', 'Ctk.Lib');
App::uses('CtkFactory', 'Ctk.Lib');
App::uses('CtkContent', 'Ctk.Lib');

/**
 * Creates a factory to use the core CakePHP helpers.
 *
 * @package       CakeFactory.View.Factory
 */
class GalleriaFactory extends CtkFactory {

	/**
	 * An array containing the names of helpers this factory uses.
	 *
	 * @var mixed A single name as a string or a list of names as an array.
	 */
	public $helpers = array(
		'HtmlHelper' => array(
			'className' => 'Html'
		)
	);

	public $galleryName = 'gallery';

	public $galleryData = 'data';

/**
 * Method used to setup additional resources for the factory.
 *
 * @return void
 */
	public function setup() {
		if (isset($this->settings['assets'])) {
			if (isset($this->settings['assets']) && $this->settings['assets']) {
				if (isset($this->settings['js'])) {
					if (is_string($this->settings['js'])) {
						echo $this->HtmlHelper->script($this->settings['js']);
					} else if (is_array($this->settings['js'])) {
						for ($i = 0; $i < count($this->settings['js']); $i++) {
							echo $this->HtmlHelper->script($this->settings['js'][$i]);
						}
					}
				} else {
			//					echo $this->HtmlHelper->script('GalleriaFactory.galleria/src/galleria.js');
				}
			}
		}

	}
}

