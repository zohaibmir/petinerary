<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reviews', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->string('name');
            $table->string('street');
            $table->string('number');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('opening_days');
            $table->string('opening_time');
            $table->string('logo');
            $table->string('facebook');

            $table->string('instagram');
            $table->integer('rating_quality')->default(0);
            $table->integer('rating_budget')->default(0);

            $table->integer('views')->default(0);

            $table->boolean('pet_review')->default(0);
            $table->boolean('status')->default(0);

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->text('rule_conditions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('reviews');
    }

}
