<?php

namespace Ramaki\Inventory;

use Ramaki\Inventory\Commands\InventoryCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InventoryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('inventory')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_warehouses_table')
            ->hasCommand(InventoryCommand::class);
    }


    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/cart_session.php',
            'lunar.cart_session'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/cart.php',
            'lunar.cart'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/database.php',
            'lunar.database'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/media.php',
            'lunar.media'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/orders.php',
            'lunar.orders'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/panel.php',
            'lunar.panel'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/payments.php',
            'lunar.payments'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/pricing.php',
            'lunar.pricing'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/search.php',
            'lunar.search'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/shipping.php',
            'lunar.shipping'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/taxes.php',
            'lunar.taxes'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config/lunar/urls.php',
            'lunar.urls'
        );


    }


    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/lunar/cart_session.php' => config_path('lunar/cart_session.php'),
                __DIR__ . '/../config/lunar/cart.php' => config_path('lunar/cart.php'),
                __DIR__ . '/../config/lunar/database.php' => config_path('lunar/database.php'),
                __DIR__ . '/../config/lunar/media.php' => config_path('lunar/media.php'),
                __DIR__ . '/../config/lunar/orders.php' => config_path('lunar/orders.php'),
                __DIR__ . '/../config/lunar/panel.php' => config_path('lunar/panel.php'),
                __DIR__ . '/../config/lunar/payments.php' => config_path('lunar/payments.php'),
                __DIR__ . '/../config/lunar/pricing.php' => config_path('lunar/pricing.php'),
                __DIR__ . '/../config/lunar/search.php' => config_path('lunar/search.php'),
                __DIR__ . '/../config/lunar/shipping.php' => config_path('lunar/shipping.php'),
                __DIR__ . '/../config/lunar/taxes.php' => config_path('lunar/taxes.php'),
                __DIR__ . '/../config/lunar/urls.php' => config_path('lunar/urls.php'),
            ], 'config');
        }



        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'inventory-migrations');
    }
}
