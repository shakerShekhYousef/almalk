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
        Schema::create('estate_propert_stores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estate_id')->unsigned();
            $table->unsignedBigInteger('property_id')->unsigned();
            $table->string('value')->require();
            $table->string('property_name_ar')->require();
            $table->string('property_name_en')->require();
            $table->foreign('estate_id')->references('id')->on('estates')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('estate_properties')->onDelete('cascade');

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
        Schema::dropIfExists('estate_propert_stores');
    }
};
