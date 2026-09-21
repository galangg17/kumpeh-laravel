<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_description');
            $table->text('description');
            $table->integer('price')->default(0);
            $table->string('weight')->nullable();
            $table->string('packaging')->nullable();
            $table->string('sku')->nullable();
            $table->integer('stock')->default(50);
            $table->boolean('is_featured')->default(true);
            $table->string('main_image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
