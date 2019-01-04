<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuccessStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('success_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->nullable()->unsigned();
            $table->integer('institute_id')->unsigned();
            $table->string('image');
            $table->string('description');
            $table->timestamps();
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('institute_id')
                ->references('id')
                ->on('institutes')
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
        Schema::dropIfExists('success_stories');
    }
}
