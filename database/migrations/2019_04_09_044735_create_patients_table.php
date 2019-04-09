<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            // Patient name info
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            
            // Patient contact info
            $table->string('email');
            $table->string('phone_number');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone_number');

            // Patient details info
            $table->date('birthday');
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
        Schema::dropIfExists('patients');
    }
}
