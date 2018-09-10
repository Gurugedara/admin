<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInstitiutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_students', function (Blueprint $table) {
            $table->string('institute_id');
            $table->string('student_id');
            $table->string('regNumber');
            $table->integer('status')->default('0');
            $table->timestamps();
            $table->primary(['student_id','institute_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_institiutes');
    }
}
