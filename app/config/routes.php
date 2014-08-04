<?php
/**
 * Route arrays are the recommended way to register routes for your application.
 * The array keys are route names.
 */
return [
	'first.route' => [
		'method'  => 'GET',
		'path'    => '/',
		'handler' => 'MyApplication\ExampleController:exampleAction',
	],
	'second.route' => [
		'method'  => 'GET',
		'path'    => '/bar/{v1}',
		'handler' => 'MyApplication\ExampleController:otherAction',
	],
];
