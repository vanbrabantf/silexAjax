<?php

$app['debug'] = true;
$app['twig.path'] = [__DIR__.'/../public/views'];
$app['twig.options'] = ['cache' => __DIR__.'/../public/cache/twig'];

$app->register(new Ziadoz\Silex\Provider\CapsuleServiceProvider, [
    'capsule.connection' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => '',
        'username'  => '',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
        'logging'   => true,
    ],
]);