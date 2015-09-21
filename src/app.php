<?php
use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Vanbrabantf\Providers\CurlServiceProvider;
use Vanbrabantf\Providers\GoogleMapsServiceProvider;
use Vanbrabantf\Providers\OfficeRepositoryServiceProvider;

$app = new Application();

$app->register(new UrlGeneratorServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new CurlServiceProvider());
$app->register(new GoogleMapsServiceProvider());
$app->register(new OfficeRepositoryServiceProvider());

$app['twig'] = $app->share($app->extend('twig', function ($twig, $app) {
    return $twig;
}));

return $app;
