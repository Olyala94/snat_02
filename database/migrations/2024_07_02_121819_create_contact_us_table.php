<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 50);
            $table->text('message');
            $table->string('phone', 10);
            $table->boolean('status'); 
            $table->timestamps();
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
