<?php
/**
 * As an alternative to calling $router->addRoute() you can specify an array of
 * routes in this config file. Route array configuration is most useful for
 * packages and when you want to easily override routes. If you don't want to
 * use route array configurations, you can simply delete this file.
 */
return [
	'second.route' => [
		'method'  => 'GET',
		'path'    => '/bar/{v1}',
		'handler' => 'Application\ExampleController:otherAction',
	],
];
