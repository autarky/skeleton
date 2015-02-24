#!/usr/bin/env php5
<?php
$app = require dirname(__DIR__).'/app/start.php';
$app->boot();

/**
 * This creates a Psysh interactive PHP shell. The $app variable, which you can
 * use to get access to all of the application's services, is available.
 *
 * Note that you must install the psy/psysh composer package to use this feature
 * - it does not come installed with the framework.
 *
 * @link http://psysh.org/
 */
Psy\Shell::debug(['app' => $app]);