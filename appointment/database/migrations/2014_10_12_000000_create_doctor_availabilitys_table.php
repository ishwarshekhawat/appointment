<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAvailabilitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_availabilitys', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_id');
            $table->date('date'); 
            $table->time('start_time'); 
            $table->time('end_time'); 
            $table->string('duration');
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
        Schema::dropIfExists('doctor_availabilitys');
    }
}
