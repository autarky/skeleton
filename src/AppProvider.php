<?php
namespace MyApplication;

use Autarky\Kernel\ServiceProvider;

/**
 * Service providers are a class-based way to configure your application and
 * register services. The register() method is called when the application is
 * starting up. Inside it you can do things like registering IoC bindings,
 * application middleware and a few other things.
 *
 * If you need to access another service bound to the IoC container, it may not
 * be fully registered and/or configured when register() is called. To get
 * around this, create a config callback which will be invoked when the app
 * is fully loaded.
 */
class AppProvider extends ServiceProvider
{
	public function register()
	{
		// $this->app->getContainer()...
		// $this->app->config(function($app) { ... });
	}
}
