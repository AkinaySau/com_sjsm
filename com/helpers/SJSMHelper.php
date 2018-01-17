<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 15.01.2018
 * Time: 16:15
 */

class SJSMHelper {

	/**
	 * Сбор параметров для url
	 *
	 * @param string $loc Ссылка
	 * @param string $lastmod Последнее изменение
	 * @param string $changefreq Частота обновления страницы
	 * @param string $priority Приоритет
	 *
	 * @since 1.0
	 * @return object готовые параметры
	 */
	public static function urlClass ( $loc, $lastmod = '0000-00-00', $changefreq = '', $priority = '' ) {
		$url[ 'loc' ] = $loc;
		if ( $lastmod != '0000-00-00' ) {
			$url[ 'lastmod' ] = $lastmod;
		}
		$url[ 'changefreq' ] = $changefreq;
		$url[ 'priority' ]   = $priority;

		return (object) $url;
	}

	public static function getHost () {
		if ( $_SERVER[ 'HTTPS' ] ) {
			$p = 'https';
		} else {
			$p = 'http';
		}

		return $p . '://' . $_SERVER[ 'HTTP_HOST' ] . '/';
	}
}