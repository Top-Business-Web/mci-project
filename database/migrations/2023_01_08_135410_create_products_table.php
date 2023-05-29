<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('images');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('sub_title_ar');
            $table->string('sub_title_en');

            $table->text('sku');
            $table->unsignedBigInteger('category_id');
            $table->json('tags');

            $table->text('desc_ar');
            $table->text('desc_en');
            $table->string('pdf');

            $table->bigInteger('part_number');
            $table->string('weight');
            $table->string('dimensions');
            $table->string('model_number');


            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
