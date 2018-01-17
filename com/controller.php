<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 15.01.2018
 * Time: 14:42
 */

class SJSMController extends JControllerLegacy {

	protected $default_view = 'map';

	public function display ( $cachable = false, $urlparams = array() ) {
		return parent::display($cachable, $urlparams);
	}
}