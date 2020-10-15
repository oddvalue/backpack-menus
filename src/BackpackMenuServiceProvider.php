<?php

namespace Oddvalue\BackpackMenus;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class BackpackMenuServiceProvider extends ServiceProvider
{
    /**
     * Where the route file lives, both inside the package and in the app (if overwritten).
     *
     * @var string
     */
    public $routeFilePath = '/routes/backpack/menucrud.php';

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->setupRoutes();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'migrations');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'backpack-menus');
        $this->publishes([
            __DIR__.'/../resources/views/backpack' => resource_path('views/vendor/backpack'),
        ], 'views');
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function setupRoutes()
    {
        // by default, use the routes file provided in vendor
        $routeFilePathInUse = __DIR__.'/..'.$this->routeFilePath;

        // but if there's a file with the same name in routes/backpack, use that one
        if (file_exists(base_path().$this->routeFilePath)) {
            $routeFilePathInUse = base_path().$this->routeFilePath;
        }

        $this->loadRoutesFrom($routeFilePathInUse);
    }
}
