<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient-appointment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->foreignId('doctor_id');
            $table->foreignId("patient_appointment_id");
            $table->string("title");
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
        Schema::dropIfExists('patient-appointment');
    }
}
