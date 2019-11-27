<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prescription_no');
            $table->string('doctor_name');
            $table->string("patient_name");
            $table->integer('patient_age');
            $table->float('patient_weight');
            $table->string('patient_gender');
            $table->string('patient_email');
            $table->string('diseases_name');
            $table->string('description');
            $table->string('medicine');
            $table->date('appointment_date');
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
        Schema::drop('prescriptions');
    }
}
