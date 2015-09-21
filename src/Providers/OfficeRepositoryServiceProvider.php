<?php
namespace Vanbrabantf\Providers;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Vanbrabantf\Offices\EloquentOfficeRepository;

class OfficeRepositoryServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['officeRepository'] = new EloquentOfficeRepository($app['maps']);
    }

    public function boot(Application $app)
    {
    }
}