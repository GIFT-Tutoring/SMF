<?php
function disable_activity_init() {
    elgg_extend_view('page/elements/sidebar', 'disable_activity/redirect');
    elgg_unregister_menu_item 	('site', 'activity');			
    elgg_unregister_widget_type ('river_widget');
}
 
elgg_register_event_handler('init', 'system', 'disable_activity_init');