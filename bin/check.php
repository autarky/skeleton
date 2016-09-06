#!/usr/bin/env php
<?php
echo <<<INFO
To get the most out of this script, run it once as your own user and
once as the web server user: `sudo -u www-data ./bin/check.php`
\n
INFO;

require_once dirname(__DIR__).'/vendor/autoload.php';

$configPath = dirname(__DIR__).'/app/config';

if (file_exists($configPath.'/path.php')) {
	$paths = require $configPath.'/path.php';
} else if (file_exists($configPath.'/path.yml')) {
	$paths = Symfony\Component\Yaml\Yaml::parse($configPath.'/path.php');
} else {
	echo "ERROR: No path config file found!\n";
	exit(1);
}

$verbose = in_array('-v', $argv) || in_array('--verbose', $argv);

exit(Autarky\Utils\Diagnostic::check($paths, $verbose));
