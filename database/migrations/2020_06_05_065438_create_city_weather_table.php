<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityWeatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_weather', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->string('coord');
            $table->mediumText('weather');
            $table->mediumText('base');
            $table->mediumText('main');
            $table->integer('visibility');
            $table->mediumText('wind');
            $table->mediumText('clouds');
            $table->integer('dt');
            $table->mediumText('sys');
            $table->integer('timezone');
            $table->integer('cod');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_weather');
    }
}
