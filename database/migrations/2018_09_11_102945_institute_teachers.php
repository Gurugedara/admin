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
            $table->integer('institute_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->string('regNumber');
            $table->integer('status')->default('0');
            $table->timestamps();
            $table->primary(['teacher_id','institute_id','course_id']);
            $table->foreign('institute_id')
                ->references('id')
                ->on('institutes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('teacher_id')
                ->references('id')
                ->on('teachers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
