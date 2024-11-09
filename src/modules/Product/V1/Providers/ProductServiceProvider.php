<?php 

declare (strict_types=1);

namespace Modules\Product\V1\Providers;

use Illuminate\Support\ServiceProvider;

final class ProductServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    $this->mergeConfigFrom(
      path: __DIR__ . '/../config.php',
      key: 'product',
    );
  }
}
