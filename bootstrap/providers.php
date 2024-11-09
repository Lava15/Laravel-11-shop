<?php

use Modules\Catalog\V1\Providers\CategoryServiceProvider;
use Modules\Product\V1\Providers\ProductServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    CategoryServiceProvider::class,
    ProductServiceProvider::class,
];
