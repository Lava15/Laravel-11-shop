<?php

namespace Modules\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(
            path: "__DIR__ . /../config.php",
            key: 'catalog.categories',
        );
        $this->loadRoutesFrom(__DIR__ . '/../web.php');
    }
}
