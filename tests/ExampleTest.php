<?php
namespace MyApplication\Tests;

use Autarky\Testing\WebTestCase;

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
class ExampleTest extends WebTestCase
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
		 * The DOM crawler can be used to run assertions on any HTML returned
		 * by the application. If you don't need this, you can extend the
		 * TestCase class instead of WebTestCase, and remove symfony/browser-kit
		 * from your composer.json.
		 *
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
