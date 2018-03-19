<?php
/*
 * PlugIn de tipo de cambio para mostrar 
 * 
 *
 * @link              	https://github.com/MetalGeorge/uasb_cambio_moneda_wp_plugin
 * @since             	1.0.0
 * @package           	cambio_moneda
 * Plugin Name:			Cambio de monedas
 * Description:       	Trabajo final para el modulo de gestion de contenido Maestria Desarrollo WEB UASB
 * Plugin URI:        	http://localhost/wordpress/cambio_moneda
 * Author:            	Jorge Escobar
 * Version:     		1.0
 * License:     		GPLv2 or later
 * License URI: 		https://www.gnu.org/licenses/gpl-2.0.txt
*/
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// carga los textos
function myplugin_load_textdomain() {

	load_plugin_textdomain( 'cambio_monedas', false, plugin_dir_path( __FILE__ ) . 'languages/' );

}

// se incluyen las dependencias para el administrador
if ( is_admin() ) {

	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';

}

// se incluyen las dependencias públicas
require_once plugin_dir_path( __FILE__ ) . 'includes/cambio_monedas.php';

