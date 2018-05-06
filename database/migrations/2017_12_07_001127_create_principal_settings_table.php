<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrincipalSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principal_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('office_en_name');
            $table->string('office_ar_name');
            $table->string('phone');
            $table->string('ar_address');
            $table->string('en_address');
            $table->string('website_email');
            $table->string('logo') ;
            $table->text('en_about')->nullable() ;
            $table->text('ar_about')->nullable() ;
            $table->text('en_privacy_term')->nullable() ;
            $table->text('ar_privacy_term')->nullable() ;
            $table->text('en_questions')->nullable() ;
            $table->text('ar_questions')->nullable() ;
            $table->text('ar_teacher_terms')->nullable() ;
            $table->text('en_teacher_terms')->nullable() ;
            $table->text('ar_student_terms')->nullable() ;
            $table->text('en_student_terms')->nullable() ;
            $table->text('ar_parent_terms')->nullable() ;
            $table->text('en_parent_terms')->nullable() ;



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
        Schema::dropIfExists('principal_settings');
    }
}
