<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender')->enum(['male','female'])->default('male');
            $table->string('type')->enum(['admin','teacher','student','parent'])->default('student');
            $table->string('mobile')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('activationCode')->nullable();
            $table->string('avatar')->default('default-avatar.png');
            $table->string('address')->nullable();
            $table->integer('active')->default(0);
            $table->integer('age')->nullable();
            $table->integer('lat')->nullable();
            $table->integer('lng')->nullable();
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
}
