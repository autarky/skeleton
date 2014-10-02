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
	/**
	 * Register IoC bindings, middleware etc here. Do not try to resolve any
	 * services from the container without wrapping it in a closure.
	 *
	 * @return void
	 */
	public function register()
	{
		// register a callback for when the application is booted and ready to
		// be configured further.
		$this->app->config([$this, 'config']);
	}

	/**
	 * Configure the application further here.
	 *
	 * @return void
	 */
	public function config()
	{
		$config = $this->app->getConfig();
		$router = $this->app->getContainer()
				->resolve('Autarky\Routing\RouterInterface');

		// this will read the app/config/routes.php file and mount it onto the
		// root path of your application. if you want to split your routes up
		// into multiple files/directories, you can simply duplicate the line of
		// code underneath and mount as many configs as you wish.
		$router->mount($config->get('routes'), '/');
	}
}
