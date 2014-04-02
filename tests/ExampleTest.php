<?php
namespace Application\Tests;

use Autarky\Testing\TestCase;

class ExampleTest extends TestCase
{
	protected function createApplication()
	{
		return require dirname(__DIR__).'/app/start.php';
	}

	/** @test */
	public function example()
	{
		$this->assertEquals('testing', $this->app->getEnvironment());
		$crawler = $this->client->request('GET', '/');
		$response = $this->client->getResponse();
		$this->assertEquals(200, $response->getStatusCode());
	}
}
