<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->unsigned()->require();
            $table->unsignedBigInteger('country_id')->unsigned()->require();
            $table->unsignedBigInteger('city_id')->unsigned()->require();
            $table->string('Summary')->require();
            $table->string('image')->nullable();
            $table->integer('Elements_id')->require();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

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
        Schema::dropIfExists('elements');
    }
};
