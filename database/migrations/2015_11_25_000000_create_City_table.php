<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('city', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');    
            $table->string('Name')->nullable();
            $table->string('CountryCode')->nullable();
            $table->string('District')->nullable();
            $table->string('Population')->nullable();           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('city');
    }

}
