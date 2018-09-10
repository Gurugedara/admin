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
        Schema::create('student_institutes', function (Blueprint $table) {
            $table->string('studentid');
            $table->string('instituteid');
            $table->string('regNumber');
            $table->integer('status')->default('0');
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
