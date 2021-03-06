<?php

/**
 * Fired during plugin deactivation
 *
 * @link       hatfim.ydniw.com
 * @since      1.0.0
 *
 * @package    Shipping_Id
 * @subpackage Shipping_Id/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Shipping_Id
 * @subpackage Shipping_Id/includes
 * @author     Hatfim Ydniw <hatfim@ydniw.com>
 */
class Shipping_Id_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        global $wpdb;

        $wpdb->query( "DELETE FROM `$wpdb->options` WHERE `option_name` LIKE ('_transient_shipping_id_%') OR `option_name` LIKE ('_transient_timeout_shipping_id_%')" );
	}

}
