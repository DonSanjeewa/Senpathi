<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('leave_id');
            $table->unsignedInteger('days'); 
            $table->datetime('from');
            $table->datetime('to');
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
        Schema::dropIfExists('pending_leaves');
    }
}
