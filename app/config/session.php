<?php
return [
	/**
	 * Which handler to use.
	 *
	 * @link http://symfony.com/doc/current/components/http_foundation/session_configuration.html
	 *
	 * Available options: native, file, pdo, mongo, memcache, memcached, null
	 */
	'handler' => 'file',

	/**
	 * The $options argument given to the session handler's constructor.
	 * Usually you can leave this alone, but look up the documentation for your
	 * session handler to check if there are any required options.
	 */
	'handler-options' => [],

	/**
	 * Whether or not to "mock" the session driver. This is mostly for tests,
	 * but could also be used to enforce a stateless API.
	 */
	'mock' => false,
];
