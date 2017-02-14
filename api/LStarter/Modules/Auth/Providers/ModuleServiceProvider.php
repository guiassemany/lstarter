<?php

namespace LStarter\Modules\Auth\Providers;

use Caffeinated\Modules\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Laratrust\LaratrustServiceProvider;


class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'auth');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'auth');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'auth');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
      // Module ServiceProviders
      $this->app->register(RouteServiceProvider::class);
      $this->app->register('Tymon\JWTAuth\Providers\JWTAuthServiceProvider');
      $this->app->register(LaratrustServiceProvider::class);

      // Module Facades
      $loader = AliasLoader::getInstance();
      $loader->alias('JWTAuth', 'Tymon\JWTAuth\Facades\JWTAuth');
      $loader->alias('JWTFactory', 'Tymon\JWTAuth\Facades\JWTFactory');
      $loader->alias('Laratrust', 'Laratrust\LaratrustFacade');

      // @TODO: register middlewares here not in App\Http\Kernel
    }
}
