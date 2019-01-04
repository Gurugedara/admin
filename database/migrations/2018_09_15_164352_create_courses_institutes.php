<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesInstitutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_institutes', function (Blueprint $table) {
            $table->integer('institute_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('syllabus_id')->unsigned();
            $table->timestamps();
            $table->primary(['institute_id','course_id']);
            $table->foreign('institute_id')
                ->references('id')
                ->on('institutes')
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
