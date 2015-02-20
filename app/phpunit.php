<?php
// Use Composer's autoloader.
require_once dirname(__DIR__).'/vendor/autoload.php';

// Make sure the default timezone is set to prevent errors.
date_default_timezone_set('UTC');

// If you use mocking libraries or other third-party libraries that benefit from
// some additional setup during testing, you can do so here. Some examples:
// Mockery::getConfiguration()->allowMockingNonExistentMethods(false);
// Carbon\Carbon::setTestNow(Carbon\Carbon::now());
