<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->text('quote');
            $table->text('story');
            $table->string('photo_url');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
