<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Kernel\WebApp;

$app = new WebApp (__DIR__ . '/../app', false);

$app->run();