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
	 * All controller actions are given the request as the first parameter.
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
	 * As you can see, the Request type-hinting is optional.
	 * 
	 * Argument #2 and on are route parameters.
	 */
	public function otherAction($request, $foo)
	{
		return 'Parameter: '.$foo;
	}
}
