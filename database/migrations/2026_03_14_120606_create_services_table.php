<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('purpose_title')->nullable();

            $table->string('icon')->nullable();
            $table->string('card_image')->nullable();
            $table->string('cover_image')->nullable();

            $table->string('background_color')->nullable()->default('#F4F5F8');
            $table->string('icon_background_color')->nullable()->default('#4920E5');

            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('order_no')->default(0);

            $table->string('seo_title')->nullable();
            $table->string('seo_description', 160)->nullable();
            $table->text('seo_keywords')->nullable();
            $table->string('og_image')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};