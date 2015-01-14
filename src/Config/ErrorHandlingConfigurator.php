<?php
namespace MyApplication\Config;

use Autarky\Errors\ErrorHandlerManager;
use Autarky\Kernel\ConfiguratorInterface;
use Exception;
use Psr\Log\LoggerInterface;

/**
 * This configurator adds error handling. To begin with, the only handler is a
 * simple one that logs all uncaught exceptions, but you can also add handlers
 * that return responses to the end user.
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
