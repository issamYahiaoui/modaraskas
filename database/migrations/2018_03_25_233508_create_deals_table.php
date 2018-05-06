<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->nullable();
            $table->integer('teacher_id')->unsigned()->nullable();
            $table->dateTime('begin_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->integer('price')->nullable();
            $table->enum('state',['pending','available','canceled'])->default('pending');
            $table->enum('paymentMethod',['masterCard','visaCard','paypal'])->default('paypal');
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
        Schema::dropIfExists('deals');
    }
}
