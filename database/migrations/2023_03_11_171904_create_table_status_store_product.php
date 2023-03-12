<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_store_product', function (Blueprint $table) {
            $table->unsignedBigInteger('id_store')->nullable();
            $table->foreign('id_store')->references('id')->on('store')->onDelete('cascade');
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_store_product', function (Blueprint $table) {
            $table->dropConstrainedForeignId('id_store');
            $table->dropConstrainedForeignId('id_product');
        });
    }
};
