<?php
namespace Vanbrabantf\Http;

use Vanbrabantf\Http\Controllers\SearchController;

// Dependencies
$app['search.controller'] = $app->share(function() use ($app) {
    return new SearchController($app['twig'], $app['officeRepository']);
});

// Routes
$app->get('/', 'search.controller:indexAction');
$app->post('/', 'search.controller:findAction');
