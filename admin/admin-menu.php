<?php // MyPlugin - Admin Menu

/*
	Añadiendo el menú y las configuraciones de página
*/

// añade top-level menu
function cambio_moneda_add_toplevel_menu() {

	add_menu_page(
		'Proyecto Final: Cambio de Monedas',
		'Cambio de Monedas',
		'manage_options',
		'Cambio-de-Monedas',
		'cambio_moneda_display_page',
		plugins_url('cambio_monedas/images/money_icon.png')
		
	);

}
add_action( 'admin_menu', 'cambio_moneda_add_toplevel_menu' );