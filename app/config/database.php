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
			'Server'   => 'localhost,1521',
			'Database' => getenv('DB_DBNAME'),
			'username' => getenv('DB_USERNAME'),
			'password' => getenv('DB_password'),
		],

		'mysql' => [
			'driver'   => 'mysql',
			'host'     => 'localhost',
			'port'     => 3307,
			'dbname'   => getenv('DB_DBNAME'),
			'username' => getenv('DB_USERNAME'),
			'password' => getenv('DB_password'),
			'charset'  => 'utf8',
			'pdo_init_commands' => [
				'SET SESSION sql_mode = TRADITIONAL,
				     SESSION TRANSACTION ISOLATION LEVEL READ COMMITTED',
			],
		],
	],
];
