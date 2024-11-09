<?php

declare(strict_types=1);

namespace Modules\Catalog\V1\Providers;

use Illuminate\Support\ServiceProvider;

final class CategoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(
            path: __DIR__ . '/../config.php',
            key: 'catalog',
        );
    }
}
