<?php
/**
 * Created by PhpStorm.
 * User: felipe
 * Date: 13/01/16
 * Time: 18:21
 */

namespace Filpgame\Pagarme;


use Illuminate\Support\ServiceProvider;

class PagarmeServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->handleConfigs();
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('pagarme', Pagarme::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['pagarme'];
    }

    /**
     * Publishes and Merge configs.
     */
    public function handleConfigs()
    {
        $this->publishes([__DIR__ . '/../config/pagarme.php' => config_path('pagarme.php')], 'config');
    }
}