<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('signature_no');
            $table->string('serial_no');
            $table->string('personal_file_no');
            $table->string('full_name');
            $table->string('name_with_initials');
            $table->string('gender');
            $table->integer('section');
            $table->string('nic_no');
            $table->string('permanent_addr');
            $table->string('wnop_no');
            $table->integer('service');
            $table->integer('grade');
            $table->integer('main_subject_id');
            $table->string('medium');
            $table->string('contact_mobile');
            $table->string('contact_home');
            $table->dateTime('dob');
            $table->string('remarks');
            $table->string('civil_status');
            $table->string('photo_file_name');
            $table->integer("religion_id");
            $table->string('photo_content_type');
            $table->string('photo_data');
            $table->string('nationality_id');
            $table->string('designation_id');
            $table->string('educational_qualific');
            $table->string('professional_qualific');
            $table->string('promotions');
            $table->dateTime('increment_date');
            $table->dateTime('duty_assume_date');
            $table->dateTime('pension_date');
            $table->dateTime('joined_date');
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
        Schema::dropIfExists('teachers');
    }
}

