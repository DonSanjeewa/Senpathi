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
            $table->unsignedInteger('user_id');

            $table->string("name_initials");
            $table->string("full_name");
            $table->string("nic");
            $table->date("dob");
            $table->text("address");
            $table->string("contact_mobile");
            $table->string("contact_home");

            $table->string("civil_status");
            $table->string("nationality_id");
            $table->string("religion_id");

            $table->string("widow_and_orphan_no");
            $table->string("salary_compute_no");
            $table->string("signature_no");
            $table->string("gov_reg_no");
            $table->string("personal_file_no");

            $table->string("designation_id");
            $table->string("section_id");
            $table->string("medium");
            $table->string("main_subject_id");
            $table->date("joined_at");

            $table->string("service_grade_id");
            $table->string("nature_of_appointment");
            $table->string("current_role");
            $table->string("current_type");
            $table->string("salary");

            $table->date("first_appointment_at");

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

