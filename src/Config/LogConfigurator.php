<?php
namespace MyApplication\Config;

use Autarky\Application;
use Autarky\ConfiguratorInterface;
use Autarky\Config\ConfigInterface;
use Autarky\Logging\ChannelManager;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * This configurator sets up a monolog logger that logs everything into a single
 * file per PHP SAPI.
 */
class LogConfigurator implements ConfiguratorInterface
{
	protected $channelManager;
	protected $config;
	protected $environment;

	public function __construct(
		ChannelManager $channelManager,
		Application $application,
		ConfigInterface $config
	) {
		$this->channelManager = $channelManager;
		$this->environment = $application->getEnvironment();
		$this->config = $config;
	}

	public function configure()
	{
		$this->channelManager->setChannel('default', $this->makeLogger());
	}

	protected function makeLogger()
	{
		$logger = new Logger($this->environment);

		if ($logpath = $this->getLogPath()) {
			$logger->pushHandler($handler = new StreamHandler($logpath, Logger::DEBUG));
			$handler->setFormatter(new LineFormatter(null, 'Y-m-d H:i:s.u P', true));
		}

		return $logger;
	}

	protected function getLogPath()
	{
		if (!$logdir = $this->getLogDirectory()) {
			return null;
		}

		if (!is_dir($logdir)) {
			throw new \RuntimeException("Log directory $logdir does not exist or is not a directory.");
		}

		$logpath = rtrim($logdir, '\\/').'/'.PHP_SAPI.'.log';

		if (file_exists($logpath) && !is_writable($logpath)) {
			throw new \RuntimeException("Log file $logpath is not writeable.");
		}

		return $logpath;
	}

	protected function getLogDirectory()
	{
		if ($this->config->has('path.logs')) {
			return $this->config->get('path.logs');
		}

		if ($this->config->has('path.storage')) {
			$path = $this->config->get('path.storage').'/logs';

			if (is_dir($path)) {
				return $path;
			}
		}

		return null;
	}
}
