<?php
namespace MyApplication\Config;

use Autarky\Errors\ErrorHandlerManager;
use Autarky\Kernel\ConfiguratorInterface;
use Exception;
use Psr\Log\LoggerInterface;

/**
 * This configurator adds an error handler that logs the error.
 */
class ErrorHandlingConfigurator implements ConfiguratorInterface
{
	protected $errorHandlerManager;
	protected $logger;

	public function __construct(
		ErrorHandlerManager $errorHandlerManager,
		LoggerInterface $logger
	) {
		$this->errorHandlerManager = $errorHandlerManager;
		$this->logger = $logger;
	}

	public function configure()
	{
		$this->errorHandlerManager->appendHandler(function(Exception $exception) {
			$this->logger->error($exception);
		});
	}
}
