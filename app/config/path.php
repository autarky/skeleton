<?php
return [
	// The root path of your project.
	'base' => $base = dirname(dirname(__DIR__)),

	// The path to the autarky app folder, which contains the config directory.
	'app' => $base . '/app',

	// Path to the public directory, which is your web server's document root.
	'public' => $base . '/public',

	// Path to your composer vendor directory. This path is used to copy files
	// from packages into your project (WIP).
	'vendor' => $base . '/vendor',

	// The path where your templates are located.
	'templates' => $base . '/app/templates',

	// The path where various storage files should be placed. This includes log
	// files, session files if you use the file driver, and cached templates.
	'storage' => $base . '/var',

	// Regex parsing of routes is expensive. It is possible to save the parsed
	// route data to a file to improve performance. Note that closure routes
	// will cause caching to break. Set to null to disable.
	'route_cache' => null,
];
