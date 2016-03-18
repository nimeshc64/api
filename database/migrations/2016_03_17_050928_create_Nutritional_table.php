<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritional', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('recipe_id');
            $table->string('nutrient');
            $table->string('amount');
            $table->string('dri/dv');
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
        Schema::drop('nutritional');
    }
}
