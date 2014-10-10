<?php
return [
	// The connection to use by default.
	'connection' => 'sqlite',

	// The connections available to the application. You can add as many as you
	// like, and resolve them via the MultiPdoContainer.
	'connections' => [
		'sqlite' => [
			'dsn' => 'sqlite:'.dirname(__DIR__).'/storage/db.sqlite',
			'username' => null,
			'password' => null,
			'options' => [],
		],
	],
];
