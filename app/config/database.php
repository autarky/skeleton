<?php
return [
	// The connection to use by default.
	'connection' => 'sqlite',

	// The connections available to the application. You can add as many as you
	// like, and resolve them via the ConnectionManager.
	'connections' => [
		'sqlite' => [
			'driver' => 'sqlite',
			'path'   => dirname(__DIR__).'/storage/db.sqlite',
		],

		'postgres' => [
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'port'     => 5432,
			'dbname'   => getenv('DB_DBNAME'),
			'username' => getenv('DB_USERNAME'),
			'password' => getenv('DB_PASSWORD'),
		],

		'mssql' => [
			'driver'   => 'sqlsrv',
			'username' => getenv('DB_USERNAME'),
			'password' => getenv('DB_password'),
			'Server'   => 'localhost,1521',
			'Database' => getenv('DB_DBNAME'),
		],
	],
];
