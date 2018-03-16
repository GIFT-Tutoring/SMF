<?php
$theurl = elgg_get_plugin_setting('theurl12', 'disable_activity');


if (elgg_get_context() == "activity") {
   header( 'Location:'. $theurl ) ;
   }
   ?>