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
        Schema::create('estate_views', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estate_id')->unsigned();
            $table->unsignedBigInteger('view_id')->unsigned();
            $table->foreign('estate_id')->references('id')->on('estates')->onDelete('cascade');
            $table->foreign('view_id')->references('id')->on('views')->onDelete('cascade');

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
        Schema::dropIfExists('estate_views');
    }
};
