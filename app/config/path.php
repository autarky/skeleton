<?php
return [
	/**
	 * The root path of your project.
	 */
	'base' => $base = dirname(dirname(__DIR__)),

	/**
	 * The path to the autarky app folder, which contains the config directory.
	 */
	'app' => $base . '/app',

	/**
	 * Path to the public directory, which is your web server's documen root.
	 */
	'public' => $base . '/public',

	/**
	 * Path to your composer vendor directory. This path is used to copy files
	 * from packages into your project (WIP).
	 */
	'vendor' => $base . '/vendor',

	/**
	 * The path where your templates are located.
	 */
	'templates' => $base . '/app/templates',

	/**
	 * The path where cached template files should be stored.
	 */
	'templates_cache' => $base . '/app/storage/templates',

	/**
	 * If the 'file' session handler is used, this is the path to the directory
	 * where session files will be stored.
	 */
	'session' => $base . '/app/storage/session',

	/**
	 * The directory where log files are stored. Change to null to disable
	 * logging altogether, or if you want to configure logging manually.
	 */
	'logs' => $base . '/app/storage/logs',

	/**
	 * Regex parsing of routes is expensive. It is possible to save the parsed
	 * route data to a file to improve performance. Note that closure routes
	 * will cause caching to break. Set to null to disable.
	 */
	'route_cache' => null,
];
