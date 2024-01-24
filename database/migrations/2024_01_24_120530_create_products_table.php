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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sped_code_id');
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('mesure_unit_id');
            $table->string('product_code', 10);
            $table->string('product_name', 100);
            $table->string('product_image', 200);
            $table->integer('volume');
            $table->float('stock', 10, 4);
            $table->float('product_value', 10, 4);
            $table->date('register_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sped_code_id')->references('id')->on('sped_codes');
            $table->foreign('product_type_id')->references('id')->on('product_types');
            $table->foreign('mesure_unit_id')->references('id')->on('mesure_units');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
