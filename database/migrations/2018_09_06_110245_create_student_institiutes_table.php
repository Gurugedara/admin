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
        Schema::create('student_institiutes', function (Blueprint $table) {
            $table->string('studentid');
            $table->string('instituteid');
            $table->integer('status')->default('0');
            $table->integer('usernu');
            $table->timestamps();
            $table->primary(['studentid','instituteid']);
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
