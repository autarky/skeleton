<?php
// Use Composer's autoloader.
require_once dirname(__DIR__).'/vendor/autoload.php';

$env = function() {
	return getenv('AUTARKY_ENV') ?: 'production';
};

$providers = [
	// Some providers are more important than others and should come first.
	new Autarky\Container\ContainerProvider,
	new Autarky\Config\ConfigProvider(__DIR__.'/config'),
	new Autarky\Errors\ErrorHandlerProvider,

	// The following providers are non-vital, and the order does not matter.
	new Autarky\Database\DatabaseProvider,
	new Autarky\Events\EventDispatcherProvider,
	new Autarky\Logging\LoggingProvider,
	new Autarky\Routing\RoutingProvider,
	new Autarky\Session\SessionProvider,
	new Autarky\Templating\TwigTemplatingProvider,

	// You can (and should!) make your own service providers.
	new MyApplication\AppProvider,
];

$app = new Autarky\Kernel\Application($env, $providers);

return $app;
