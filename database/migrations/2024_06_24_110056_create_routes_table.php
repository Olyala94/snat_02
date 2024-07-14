<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255);
            $table->string('uniq_slug',255);
            $table->boolean('amp')->default(0);
            $table->boolean('is_active')->default(0);
            $table->text('meta_information')->nullable();
            $table->string('lang', 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
