<?php
/**
 * Created by PhpStorm.
 * User: Sau
 * Date: 13.01.2018
 * Time: 20:18
 */

jimport('joomla.application.component.controller');
try {
	include_once __DIR__.'/helpers/SJSMHelper.php';
	$controller = JControllerLegacy::getInstance('SJSM');
	$controller->execute('display');
	$controller->redirect();
} catch ( Exception $e ) {
	JErrorPage::render($e);
}


