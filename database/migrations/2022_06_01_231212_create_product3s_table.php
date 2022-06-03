<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product3s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id3')->unsigned();
            $table->string('image3');
            $table->string('title3');
            $table->longtext('description3');
            $table->timestamps();

            $table->foreign('user_id3')->references('id')->on('product2s')->
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
        Schema::dropIfExists('product3s');
    }
}
