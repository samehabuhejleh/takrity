<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product2s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id2')->unsigned();
            $table->string('image2');
            $table->string('title2');
            $table->longtext('description2');
            $table->timestamps();

            $table->foreign('user_id2')->references('id')->on('product1s')->
            ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product2s');
    }
}
