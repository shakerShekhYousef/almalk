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
        Schema::create('estate_exterior_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estate_id')->unsigned();
            $table->unsignedBigInteger('exterior_Features_id')->unsigned();
            $table->foreign('estate_id')->references('id')->on('estates')->onDelete('cascade');
            $table->foreign('exterior_Features_id')->references('id')->on('exterior_features')->onDelete('cascade');

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
        Schema::dropIfExists('estate_exterior_features');
    }
};
