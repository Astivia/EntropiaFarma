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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('description');
            $table->unsignedBigInteger('id_type');
            $table->float('price');
            $table->integer('stock');
            $table->string('tecnicalDetails');
            $table->date('expiration');
            $table->integer('status');
            $table->foreign('id_type')->references('id')->on('productsType');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};