<?php
/**
 * Main Theme Class
 *
 * @package Minimo
 */

namespace MINIMO_THEME\Inc;

use MINIMO_THEME\Inc\Traits\Singleton;

/**
 * Minimo theme
 */
class MINIMO_THEME {
	use Singleton;

	/**
	 * Construct.
	 */
	protected function __construct() {
		// load class.
		Assets::get_instance();
		Menus::get_instance();
	}
}
