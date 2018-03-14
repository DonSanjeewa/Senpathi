<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("teacher_id");
            $table->string("employer");
            $table->string("subject");
            $table->unsignedInteger("years");
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
        Schema::dropIfExists('teacher_experiences');
    }
}
