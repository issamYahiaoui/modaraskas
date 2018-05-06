<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolStageChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_stage_choices', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('student_id')->unsigned()->nullable();
            $table->integer('school_stage_id')->unsigned()->nullable();
            $table->integer('specialization_id')->unsigned()->nullable();
            $table->integer('teaching_type_id')->unsigned()->nullable();
            $table->integer('high_school_stage_id')->unsigned()->nullable();
            $table->string('school')->nullable();
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
        Schema::dropIfExists('school_stage_choices');
    }
}
