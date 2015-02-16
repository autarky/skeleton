<?php
namespace MyApplication\Config;

use Autarky\ConfiguratorInterface;
use Autarky\Config\ConfigInterface;
use Autarky\Routing\RouterInterface;

/**
 * This configurator reads the app/config/routes file and mounts it onto the
 * root path of your application.
 */
class RouteConfigurator implements ConfiguratorInterface
{
	protected $config;
	protected $router;

	public function __construct(
		RouterInterface $router,
		ConfigInterface $config
	) {
		$this->router = $router;
		$this->config = $config;
	}

	public function configure()
	{
		$this->router->mount($this->config->get('routes'), '/');
	}
}
