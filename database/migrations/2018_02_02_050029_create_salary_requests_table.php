<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consolidated_salary');
            $table->integer('cost_of_living_allowance');
            $table->integer('arrears_of_salaries');
            $table->integer('principal_allowances');
            $table->integer('other_offers');
            $table->integer('festival_advance');
            $table->integer('widow_widower');
            $table->integer('co_operative_development_cost');
            $table->integer('festival_cost');
            $table->integer('special_advance');
            $table->integer('distress_loan_installment');
            $table->integer('insurance_premium');
            $table->integer('property_loan');
            $table->integer('houses_rent');
            $table->integer('electricity_bills');
            $table->integer('stamp_duty');
            $table->integer('government_bonds_association');
            $table->integer('premium_rate_of_public_servants');
            $table->integer('user_id');
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
        Schema::dropIfExists('salary_requests');
    }
}
