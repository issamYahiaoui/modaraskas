<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighSchoolStageTeachingChoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('high_school_stage_teaching_choice', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('high_school_stage_id')->unsigned()->nullable();
            $table->integer('teaching_choice_id')->unsigned()->nullable();
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
        Schema::dropIfExists('high_school_stage_teaching_choice');
    }
}
