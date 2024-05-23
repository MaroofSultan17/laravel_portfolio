<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('MAROOF SULTAN');
            $table->string('skill')->default('lARAVEL/web');
            $table->string('facebook');
            $table->string('github');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('phoneno')->default('+309 0742546');
            $table->string('email')->default('maroofsultan17@gmail.com');
            $table->string('address');
            $table->string('resume');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
