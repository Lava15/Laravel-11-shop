<?php
declare (strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id') ->nullable() ->constrained();
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->boolean('is_active')->default(true);
            $table->string('order')->default(999);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    
    public function down(): void
        {
            if(!app()->isProduction) {
                Schema::dropIfExists('products');
           }
       }
};
