<?php
return [
	/**
	 * The root path of your project.
	 */
	'base' => dirname(dirname(__DIR__)),

	/**
	 * The path where your templates are located.
	 */
	'templates' => dirname(dirname(__DIR__)).'/templates',

	/**
	 * The path where cached template files should be stored.
	 */
	'templates-cache' => dirname(dirname(__DIR__)).'/tmp/templates',

	/**
	 * If the 'file' session handler is used, this is the path to the directory
	 * where session files will be stored.
	 */
	'session' => dirname(dirname(__DIR__)).'/tmp/session',
];
