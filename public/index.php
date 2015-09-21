<?php
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

require_once __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../src/app.php';

ErrorHandler::register();
ExceptionHandler::register();

require __DIR__ . '/../config/dev.php';
require __DIR__ . '/../src/Http/Routes.php';

$app['capsule'];
$app->run();
