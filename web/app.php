<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpBenchmarksSymlex\Kernel\WebApp;

$app = new WebApp (__DIR__ . '/../app', false);

$app->run();

// require phpbenchmarks stats.php here when needed
