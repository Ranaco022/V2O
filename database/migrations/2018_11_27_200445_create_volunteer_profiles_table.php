<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('homeAddress');
            $table->string('cellNumber');
            $table->string('homeNumber');
            $table->integer('examNumber');
            $table->enum('skill1',['Communication','Graphic Design','Decision Making','Time Management',
                'Self-motivation', 'Conflict Resolution','Leadership','Foreign Languages','Creative','Teamwork']);
            $table->enum('skill2',['Communication','Graphic Design','Decision Making','Time Management',
                'Self-motivation', 'Conflict Resolution','Leadership','Foreign Languages','Creative','Teamwork']);
            $table->enum('skill3',['Communication','Graphic Design','Decision Making','Time Management',
                'Self-motivation', 'Conflict Resolution','Leadership','Foreign Languages','Creative','Teamwork']);
            $table->enum('interest1',['Animal Care','Senior Citizen Care','Child Care','Sports', 'Beach Cleanup','Teaching', 'Mentoring',
                'Yoga','Writing','Reading','Sewing','Baking','Painting']);
            $table->enum('interest2',['Animal Care','Senior Citizen Care','Child Care','Sports', 'Beach Cleanup','Teaching', 'Mentoring',
                'Yoga','Writing','Reading','Sewing','Baking','Painting']);

            $table->integer('volunteer_id')->unsigned();

            //Set up the foreign key table
            $table->foreign('volunteer_id')->references('id')->on('volunteers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteer_profiles');
    }
}
