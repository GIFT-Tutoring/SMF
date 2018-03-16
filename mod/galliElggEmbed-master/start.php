<?php
/**
 *	galliElggEmbed
 *	Author : Mahin Akbar | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Web	: http://webgalli.com
 *	Skype : 'team.webgalli'
 *	@package galliElggEmbed
 *	Licence : GPLV2
 *	Copyright : Team Webgalli 2013-2015
 */


elgg_register_event_handler('init', 'system', 'galliElggEmbed_init');

function galliElggEmbed_init() {
	elgg_unregister_plugin_hook_handler('output:before', 'page', '_elgg_views_send_header_x_frame_options');
	
	elgg_extend_view('page/elements/sidebar', 'galliElggEmbed/share', 1000);

	elgg_require_js("galliElggEmbed");

	elgg_register_viewtype_fallback("embed");
}
