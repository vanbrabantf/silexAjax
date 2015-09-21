<?php
namespace Vanbrabantf\Providers;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Geocoder\Provider\GoogleMaps;

class GoogleMapsServiceProvider implements ServiceProviderInterface
{
     /**
     * @param Application $app
     */
    public function register(Application $app)
    {
        $app['maps'] = new GoogleMaps($app['curl']);
    }

    public function boot(Application $app)
    {
    }
}