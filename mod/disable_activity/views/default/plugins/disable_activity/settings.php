The page to redirect to instead of activity. DO NOT INCLUDE THE SITE URL! Ex: blogs/all
<?php
$thevalue = elgg_get_plugin_setting('theurl12', 'disable_activity');
echo elgg_view('input/text', array(

    'name'  => 'params[theurl12]',

    'value' => $thevalue,

));