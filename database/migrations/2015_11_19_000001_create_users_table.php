<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('city', 60);
            $table->string('state', 60);
            $table->string('country', 60);            
            $table->string('language', 60);
            $table->string('instagram', 150);
            $table->string('facebook_id', 150)->nullable();
            $table->text('profile_img')->nullable();

            // Pet Information
            $table->string('pet', 150);
            $table->text('pet_img')->nullable();

            $table->string('password', 60);
            $table->rememberToken();

            $table->boolean('status')->default(0);
            
            $table->integer('country_id')->unsigned();
            $table->integer('language_id')->unsigned();

            // Add User Role Id. Admin, Admbassdor or Subscriber
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}
