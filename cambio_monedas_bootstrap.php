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
	load_plugin_textdomain( 'cambio_monedas', false, basename( dirname( _FILE_ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'myplugin_load_textdomain' );

// se incluyen las dependencias para el administrador
if ( is_admin() ) {
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
}

// se incluyen las dependencias públicas
require_once plugin_dir_path( __FILE__ ) . 'admin/cambio_monedas.php';

