<?php
namespace Application\Tests;

use Autarky\Testing\TestCase;

/**
 * A simple example of an application-level test. These tests will boot up
 * the entire application, giving you access to test absolutely everything.
 * Note that for regular unit tests you should instead extend the regular
 * PHPUnit_Framework_TestCase.
 * 
 * Two important properties are available on this class - $this->app, which
 * is an instance of the application itself, and $this->client, which is an
 * instance of \Symfony\Component\BrowserKit\Client, which can be used to
 * make "fake" requests to your application.
 */
class ExampleTest extends TestCase
{
	/**
	 * This method can (and should) be moved to your own abstract TestCase
	 * class if you have more than one test class.
	 */
	protected function createApplication()
	{
		return require dirname(__DIR__).'/app/start.php';
	}

	/** @test */
	public function example()
	{
		/**
		 * the environment is automatically set to 'testing' to enable
		 * test-specific configuration.
		 */
		$this->assertEquals('testing', $this->app->getEnvironment());

		/**
		 * The DOM crawler can be used to run assertions on any HTML
		 * returned by the application.
		 * @var \Symfony\Component\DomCrawler\Crawler
		 */
		$crawler = $this->client->request('GET', '/');

		/**
		 * You can also get the raw response object.
		 * @var \Symfony\Component\HttpFoundation\Response
		 */
		$response = $this->client->getResponse();

		$this->assertEquals(200, $response->getStatusCode());
	}
}
