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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('is_email_verified')->default(0);
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(null);
            $table->string('mobile_phone_number')->default(0);
            $table->boolean('isVerified')->default(false);
            $table->string('office_phone')->default(0);
            $table->string('home_phone')->default(0);
            $table->string('birthday')->default(date('y-d-m'));
            $table->boolean('is_active')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
