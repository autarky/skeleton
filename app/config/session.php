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
	 * If the "pdo" handler is used, you may choose which connection for the
	 * session handler to use. Ideally this should be a connection used only for
	 * sessions. Leave as null to use the default connection.
	 */
	'db-connection' => null,

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

	/**
	 * Whether to force the session to start on every request or not. If you do
	 * not force the session to start, it will be started the first time you try
	 * to set or get something from the session.
	 */
	'force' => false,

	/**
	 * Session cookie parameters.
	 * @link http://www.php.net/manual/en/function.session-set-cookie-params.php
	 */
	'cookie' => [
		'lifetime' => 3600,
		'domain' => null,
		'path' => '/',
		'secure' => false,
		'httponly' => false,
	],
];
