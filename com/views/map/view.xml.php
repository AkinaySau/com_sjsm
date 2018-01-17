<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 15.01.2018
 * Time: 14:50
 */

jimport('joomla.event.dispatcher');
class SJSMViewMap extends JViewLegacy {

	public function display ( $tpl = null ) {
		$xml        = new DomDocument('1.0', 'utf-8');
		$xml_urlset = $xml->appendChild($xml->createElement('urlset'));
		$xml_urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

		JPluginHelper::importPlugin('sjsm');
		$dispatcher = JEventDispatcher::getInstance();
		$plugins    = $dispatcher->trigger('collectDataForSiteMap');

		foreach ( $plugins as $plugin ) {
			if ( !is_array($plugin) ) {
				continue;
			}
			foreach ( $plugin as $item ) {
				$xml_url = $xml_urlset->appendChild($xml->createElement('url'));
				foreach ( $item as $name => $value ) {
					if ( empty($value) ) {
						continue;
					}
					$xml_url->appendChild($xml->createElement($name))
						->appendChild($xml->createTextNode($value));

				}
			}
		}


		echo $xml->saveXML();
	}

}