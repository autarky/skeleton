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

return $app;
