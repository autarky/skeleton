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
	'templates' => $base . '/templates',

	/**
	 * The path where cached template files should be stored.
	 */
	'templates-cache' => $base . '/tmp/templates',

	/**
	 * If the 'file' session handler is used, this is the path to the directory
	 * where session files will be stored.
	 */
	'session' => $base . '/tmp/session',
];
