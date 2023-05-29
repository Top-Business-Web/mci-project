<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->string('system_complete')->nullable();
            $table->bigInteger('usage')->nullable();
            $table->string('system_type')->nullable();
            $table->string('panels_place')->nullable();
            $table->string('your_roof')->nullable();
            $table->text('message')->nullable();

            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('prefer_contact')->nullable();
            $table->string('address');
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();

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
        Schema::dropIfExists('quotes');
    }
}
