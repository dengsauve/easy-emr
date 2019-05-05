<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charts', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            // Patient Relationship
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');

            // Appointment Relationship
            $table->unsignedBigInteger('appointment_id');
            $table->foreign('appointment_id')->references('id')->on('appointments');

            // Chief Complaint & related fields
            $table->text('chief_complaint');
            $table->text('illness_history');
            $table->text('physical_examination_notes');

            // Vitals
            $table->smallInteger('systolic_reading');
            $table->smallInteger('diastolic_reading');
            $table->decimal('temperature');
            $table->decimal('weight');

            // Assessment, Orders & Rx
            $table->text('assessment');
            $table->text('plan');
            $table->text('orders');

            // Progress / Notes
            $table->text('progress');

            // Soft delete and Created/Updated At
            $table->softDeletes();
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
        Schema::dropIfExists('charts');
    }
}
