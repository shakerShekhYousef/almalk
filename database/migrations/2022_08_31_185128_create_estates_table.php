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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categories_id')->unsigned()->nullable();
            $table->foreign('categories_id')->references('id')->on('estate_categories')->onDelete('cascade');
            $table->unsignedBigInteger('category_subs_id')->unsigned()->nullable();
            $table->foreign('category_subs_id')->references('id')->on('estate_category_subs')->onDelete('cascade');
            $table->unsignedBigInteger('category_sub_types_id')->unsigned()->nullable();
            $table->foreign('category_sub_types_id')->references('id')->on('estate_category_sub_types')->onDelete('cascade');

            $table->unsignedBigInteger('country_id')->unsigned()->require();
            $table->unsignedBigInteger('city_id')->unsigned()->require();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            $table->integer('price')->nullable();
            // $table->integer('number')->nullable();
            // $table->string('Listing Date')->nullable();
            // $table->string('Property_Type')->nullable();
            // $table->integer('m²(Gross)')->nullable();
            // $table->integer('m²(Net)')->nullable();
            // $table->integer('Number_of_rooms')->nullable();
            // $table->string('Building_Age')->nullable();
            // $table->integer('Floor_location')->nullable();
            // $table->integer('Number_of_Floors')->nullable();
            // $table->string('Heating')->nullable();
            // $table->string('Number_of_bathrooms')->nullable();
            // $table->string('Balcony')->nullable();
            // $table->string('Furnished')->nullable();
            // $table->string('Using_status')->nullable();
            // $table->string('Inside_the_Site')->nullable();
            // $table->string('Site_Name')->nullable();
            // $table->string('Dues(TL)')->nullable();
            // $table->integer('Deposit(TL)')->nullable();
            // $table->string('From_who')->nullable();
            // $table->string('Navigable_with_Video_Call')->nullable();

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
        Schema::dropIfExists('estates');
    }
};
