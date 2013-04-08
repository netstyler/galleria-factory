<?php
/**
 * Home controller for the Galleria Factory.
 *
 * PHP 5
 *
 * Galleria (http://www.cakestyler.ch)
 * Copyright 2013, Falk Romano (http://github.com/netstyler)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2013, Falk Romano (http://github.com/netstyler)
 * @link          http://www.cakestyler.ch Galleria Factory
 * @package       GalleriaFactory.Controller
 * @since         CakePHP(tm) v 2.2.1.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('GalleriaAppController', 'GalleriaFactory.Controller');

/**
 * Home controller.
 *
 * @package       Ctk.Controller
 */
class GalleriaFactoryController extends GalleriaFactoryAppController {

	/**
	 * Controller name.
	 *
	 * @var string
	 */
	public $name = 'Galleria';

	/**
	 * Action for choosing an option.
	 *
	 * @return void
	 */
	public function index() {
		$this->set('title_for_layout', 'Galleria DEMO Home');
	}
}

