<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string("comment",191);
            $table->integer("stars");
            $table->integer("student_id")->unsigned();
            $table->integer("institute_id")->unsigned();
            $table->integer("status");
            $table->integer("up")->default(0);
            $table->integer("down")->default(0);
            $table->timestamps();
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade')
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
        Schema::dropIfExists('reviews');
    }
}
