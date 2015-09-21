<?php
namespace Vanbrabantf\Providers;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Ivory\HttpAdapter\CurlHttpAdapter;

class CurlServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['curl'] = new CurlHttpAdapter();
    }

    public function boot(Application $app)
    {
    }
}