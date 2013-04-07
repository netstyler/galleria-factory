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

App::uses('CtkFactory', 'Ctk.Lib');

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

	/**
	 * Method used to setup additional resources for the factory.
	 *
	 * @return void
	 */
	public function setup() {}
}

