<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcqAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcq_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mcq_id')->unsigned();
            $table->string('answer');
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->foreign('mcq_id')
                ->references('id')
                ->on('mcqs')
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
        Schema::dropIfExists('mcq_answers');
    }
}
