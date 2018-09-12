<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InstituteTeachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_teachers', function (Blueprint $table) {
            $table->string('institute_id');
            $table->string('teacher_id');
            $table->string('regNumber');
            $table->integer('status')->default('0');
            $table->timestamps();
            $table->primary(['teacher_id','institute_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
