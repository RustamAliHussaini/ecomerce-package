<?php

namespace RustamAliHussaini\EcommerceCompletionPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RustamAliHussaini\EcommerceCompletionPackage\Commands\EcommerceCompletionPackageCommand;

class EcommerceCompletionPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ecommerce-completion-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ecommerce_completion_package_table')
            ->hasCommand(EcommerceCompletionPackageCommand::class);
    }
}
