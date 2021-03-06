<?php
/**
 * Simplepie Plugin
 *
 * Loads the simplepie feed parser library and provides a widget
 */

elgg_register_event_handler('init', 'system', 'simplepie_init');

function simplepie_init() {
	elgg_register_widget_type(
		'feed_reader',
		elgg_echo('simplepie:widget'),
		elgg_echo('simplepie:description'),
		array('all'),
		true
	);

	elgg_extend_view('css/elgg', 'simplepie/css');

	$lib = elgg_get_plugins_path() . 'simplepie/vendors/simplepie.php';
	elgg_register_library('simplepie', $lib);
}
