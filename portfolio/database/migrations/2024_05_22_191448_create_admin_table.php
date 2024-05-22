<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->default('null');
            $table->string('email')->default('abc@gmail.com');
            $table->string('password');
            $table->string('securepassword');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
