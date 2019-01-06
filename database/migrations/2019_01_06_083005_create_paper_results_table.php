<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paper_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('marks');
            $table->timestamps();
            $table->foreign('paper_id')
                ->references('id')
                ->on('papers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
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
        Schema::dropIfExists('paper_results');
    }
}
