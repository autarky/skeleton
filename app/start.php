<?php
// Use Composer's autoloader.
require_once dirname(__DIR__).'/vendor/autoload.php';

/**
 * bootstrap() is a shortcut to set up the default configuration. the second
 * argument defines how the environment is determined. can be a plain string or
 * a closure that returns a string.
 */
$app = Autarky\Kernel\Application::bootstrap(__DIR__, function() {
	return getenv('AUTARKY_ENV') ?: 'default';
});

/**
 * The config closure is where most of your application configuration will take
 * place. You can register routes here, or create your own routes.php file, as
 * well as events.php, macros.php and whatever else you need. Alternatively you
 * can put it all in ServiceProvider classes and register those in config/app.php,
 * or you can use the config/routes.php file.
 */
$app->config(function($app) {
	$router = $app->getRouter();
	$router->addRoute('GET', '/', 'Application\ExampleController:exampleAction', 'first.route');
});

return $app;
