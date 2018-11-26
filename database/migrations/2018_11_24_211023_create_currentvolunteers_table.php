<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentvolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('homeAddress');
            $table->string('cellNumber');
            $table->string('homeNumber');
            $table->string('emailAddress');
            $table->string('hoursWorked');
            $table->string('comments');
            $table->integer('volorg_id')->unsigned();

            //Set up the foreign key table
            $table->foreign('volorg_id')->references('id')->on('volorgs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currentvolunteers');
    }
}
