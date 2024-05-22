<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id('workid');
            $table->string('name')->default('null');
            $table->string('type')->default('null');
            $table->string('client')->default('null');
            $table->string('languages')->default('null');
            $table->string('link')->default('null');
            $table->text('details')->default('null');
            $table->string('image')->default('upload/not found');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};