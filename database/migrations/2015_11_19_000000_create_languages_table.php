<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('languages', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');    
            $table->string('name',50)->nullable();
            $table->string('code',50)->nullable();

           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('languages');
    }

}
