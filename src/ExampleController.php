<?php
namespace MyApplication;

use Autarky\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * A controller is a class that is mapped to a route. While this example
 * controller extends from Autarky\Routing\Controller, it doesn't need to - any
 * PHP class can be a controller. The only requirement is that the method the
 * route is mapped to returns either a Symfony\Component\HttpFoundation\Response
 * object or a string (which will be turned into a response).
 *
 * The Autarky\Routing\Controller class provides some useful helper messages
 * that make it easy to render templates, generate route URLs, redirect, read or
 * modify session values and more.
 */
class ExampleController extends Controller
{
	protected $dependency;

	/**
	 * Auto-dependency injection with no configuration! Unless configured,
	 * injected instances will be a new instance each time. You can inject your
	 * own classes or classes used internally by the framework, like the session
	 * or the router or the IoC container.
	 */
	public function __construct(SomeClass $dependency)
	{
		$this->dependency = $dependency;
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

		// return a rendered template using the render() method.
		return $this->render('example.html.twig', [
			'message' => $this->dependency->sayHello(),
			'counter' => $counter,
			'url' => $this->url('second.route', ['parameter']),
		]);
	}

	/**
	 * A route that doesn't take the request object.
	 */
	public function otherAction($foo)
	{
		// session flash messages are available on the next request.
		$this->flashMessages("You were visiting: second.route [$foo]");
		$this->flashMessages('Refresh the page and these messages will disappear!');

		// redirect to a named route using the redirect() method.
		return $this->redirect('first.route');
	}
}
