<?php
// Index.php should be the only publicly available PHP file in your application.
// If your webserver were to be misconfigured, it will be exposed in plaintext.
// This is why it tends to have very little information about the application,
// what libraries/frameworks are being used and so on. Instead, we just require
// another PHP file outside the public directory which does all the real work.
$app = require dirname(__DIR__) .'/app/start.php';
$app->run();
