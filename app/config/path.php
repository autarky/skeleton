<?php
return [
	// The root path of your project.
	'base' => APP_ROOT,

	// The path to the autarky app folder, which contains the config directory.
	'app' => APP_ROOT . '/app',

	// Path to the public directory, which is your web server's document root.
	'public' => APP_ROOT . '/web',

	// Path to your composer vendor directory.
	'vendor' => APP_ROOT . '/vendor',

	// The path where your templates are located.
	'templates' => APP_ROOT . '/app/templates',

	// The path where various storage files should be placed. This includes log
	// files, session files if you use the file driver, and cached templates.
	'storage' => APP_ROOT . '/var',

	// Regex parsing of routes is expensive. It is possible to save the parsed
	// route data to a file to improve performance. Note that you'll have to
	// manually delete this file if you modify your routes.  Comment out or set
	// to null to disable caching.
	// 'route_cache' => APP_ROOT . '/var/routes.cache',
];
