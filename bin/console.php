#!/usr/bin/env php5
<?php
$app = require dirname(__DIR__).'/app/start.php';

/**
 * This creates a console application instance and prepares the application for
 * a console request.
 *
 * You can add custom console commands here (before run() is called) or via your
 * own custom service providers using the registerConsole method.
 *
 * Note that you must install the symfony/console composer package to use this
 * feature - it does not come installed with the framework.
 *
 * @link http://symfony.com/doc/current/components/console/introduction.html
 * @link https://github.com/symfony/Console
 *
 * @var \Symfony\Component\Console\Application
 */
$console = $app->bootConsole();

$console->add(new \Autarky\Console\RouteDispatchCommand);
$console->add(new \Autarky\Console\RouteListCommand);

$console->run();
