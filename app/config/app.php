<?php
return [
	/**
	 * Turn debug on to display more information about exceptions, throw more
	 * exceptions early and more - but at the cost of security and performance.
	 * Turn on in development, turn off in production.
	 */
	'debug' => true,

	/**
	 * Service providers add functionality to the framework. The default ones
	 * provide a router, a templating engine and a class for managing your
	 * session. You can replace the default ones with your own or add your own
	 * custom providers here.
	 */
	'providers' => [
		'Autarky\Database\DatabaseServiceProvider',
		'Autarky\Events\EventServiceProvider',
		'Autarky\Logging\LogServiceProvider',
		'Autarky\Routing\RoutingServiceProvider',
		'Autarky\Session\SessionServiceProvider',
		'Autarky\Templating\TwigServiceProvider',

		// You can (and should!) make your own service providers.
		'MyApplication\AppProvider',
	],
];
