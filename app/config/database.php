<?php
return [
	/**
	 * The connection to use.
	 */
	'connection' => 'sqlite',

	/**
	 * The connections to choose from.
	 */
	'connections' => [
		'sqlite' => [
			'dsn' => 'sqlite:'.__DIR__.'/../storage/db.sqlite',
			'username' => null,
			'password' => null,
			'options' => [],
		],
	],
];
