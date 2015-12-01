<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('country', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');    
            $table->string('Code')->nullable();
            $table->string('Name')->nullable();
            $table->string('Continent')->nullable();
            $table->string('Region')->nullable();
            $table->string('SurfaceArea')->nullable();
            $table->string('IndepYear')->nullable();
            $table->string('Population')->nullable();
            $table->string('LifeExpectancy')->nullable();
            $table->string('GNP')->nullable();
            $table->string('GNPOld')->nullable();
            $table->string('LocalName')->nullable();
            $table->string('GovernmentForm')->nullable();
            $table->string('HeadOfState')->nullable();
            $table->string('Capital')->nullable();
            $table->string('Code2')->nullable();
            
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('country');
    }

}
