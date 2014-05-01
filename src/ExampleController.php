<?php
namespace Application;

use Autarky\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

class ExampleController extends Controller
{
	protected $class;

	/**
	 * Auto-dependency injection with no configuration! Unless configured,
	 * injected instances will be a new instance each time. You can inject your
	 * own classes or classes used internally by the framework, like the session
	 * or the router or the IoC container.
	 */
	public function __construct(SomeClass $class)
	{
		$this->class = $class;
	}

	/**
	 * If you type-hint the first parameter as the request class, you will get
	 * the request instance. Parameter #2 and on will be route parameters as
	 * usual.
	 */
	public function exampleAction(Request $request)
	{
		/**
		 * The session is an integral part of any PHP application.
		 * @var Symfony\Component\HttpFoundation\Session\Session
		 */
		$session = $this->getSession();
		$counter = $session->get('counter', 0);
		$session->set('counter', ++$counter);

		/**
		 * Templating is done via Twig (but can be swapped out with anything you
		 * want, just write a driver for it)
		 */
		return $this->view('example.html', [
			'message' => $this->class->sayHello(),
			'counter' => $counter,
			'url' => $this->url('second.route', ['parameter']),
		]);
	}

	/**
	 * A route that doesn't take the request object.
	 */
	public function otherAction($foo)
	{
		return 'Parameter: '.$foo;
	}
}
