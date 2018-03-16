<?php

$plugin_root = __DIR__;
$root = dirname(dirname($plugin_root));
$alt_root = dirname(dirname(dirname($root)));

if (file_exists("$plugin_root/vendor/autoload.php")) {
	$path = $plugin_root;
} else if (file_exists("$root/vendor/autoload.php")) {
	$path = $root;
} else {
	$path = $alt_root;
}

return [
	'default' => [
		'cropper.js' => $path . '/vendor/bower-asset/cropper/dist/cropper.min.js',
		'cropper.css' => $path . '/vendor/bower-asset/cropper/dist/cropper.min.css',
	],
];
