<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_owners', function (Blueprint $table) {
            $table->integer('institute_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->primary(['institute_id','user_id']);
            $table->timestamps();
            $table->foreign('institute_id')
                ->references('id')
                ->on('institutes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('institute_owners');
    }
}
