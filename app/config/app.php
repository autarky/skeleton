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
	 *
	 * Some optional providers have been commented out.
	 */
	'providers' => [
		'Autarky\Session\SessionServiceProvider',
		'Autarky\Routing\RoutingServiceProvider',
		'Autarky\Templating\TwigServiceProvider',

		// This provider binds a PDO instance to your container.
		// 'Autarky\Database\DatabaseServiceProvider',
		// This provider depends on the package symfony/event-dispatcher.
		// 'Autarky\Events\EventServiceProvider',
	],
];
