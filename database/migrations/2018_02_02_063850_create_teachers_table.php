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
            $table->unsignedInteger('user_id')->nullable();

            $table->string("name_initials")->nullable();
            $table->string("full_name")->nullable();
            $table->string("nic")->nullable();
            $table->date("dob")->nullable();
            $table->text("address")->nullabe();
            $table->string('email')->nullable();
            $table->string("gender")->nullable();
            $table->string("contact_mobile")->nullable();
            $table->string("contact_home")->nullable();

            $table->string("civil_status")->nullable();
            $table->string("nationality_id")->nullable();
            $table->string("religion_id")->nullable();

            $table->string("widow_and_orphan_no")->nullable();
            $table->string("salary_compute_no")->nullable();
            $table->string("signature_no")->nullable();
            $table->string("gov_reg_no")->nullable();
            $table->string("personal_file_no")->nullable();

            $table->string("designation_id")->nullable();
            $table->string("section_id")->nullable();
            $table->string("medium")->nullable();
            $table->date("joined_at")->nullable();

            $table->string("service_grade_id")->nullable();
            $table->string("nature_of_appointment")->nullable();
            $table->string("current_role")->nullable();
            $table->string("current_type")->nullable();
            $table->string("salary")->nullable();

            $table->date("first_appointment_at")->nullable();

            $table->string("approval")->default("pending");

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

