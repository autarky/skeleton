<?php
// Use Composer's autoloader to avoid manually including files and including
// files containing classes that aren't used. Read more about Composer
// autoloading here: https://getcomposer.org/doc/00-intro.md#autoloading
require_once dirname(__DIR__).'/vendor/autoload.php';

// The environment can be defined as a plain string or you a closure that
// returns a string. The closure is lazily invoked.
$env = function() {
	return getenv('AUTARKY_ENV') ?: 'production';
};

// Providers are like modules in your application. They can be core framework
// providers, third-party package providers or your own. If you want to replace
// parts of the core framework, replace the respective service provider.
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

// Instantiate the application, which does all the heavy lifting from here on.
$app = new Autarky\Kernel\Application($env, $providers);

// Return it so that the instance can easily be used from elsewhere. Example:
// $app = require '/path/to/start.php';
return $app;
