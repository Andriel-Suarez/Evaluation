<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectEvalsTable extends Migration
{
    public function up()
    {
        Schema::create('project_evals', function (Blueprint $table) {
            $table->id('ProjectEval_ID'); // Primary key with the name 'ProjectEval_ID'
            $table->unsignedBigInteger('ProjectID');
            $table->unsignedBigInteger('MemberID');
            $table->integer('seriousness');
            $table->integer('overall_rating');
            $table->string('Name');
            $table->string('position');
            $table->string('department');
            $table->string('batch');
            $table->integer('quality');
            $table->integer('schedule');
            $table->integer('contribution');
            $table->integer('difficulty');
            $table->integer('reporting');
            $table->integer('technical_capability');
            $table->integer('sense_of_ownership');
            $table->integer('teamwork');
            $table->integer('leadership');
            $table->integer('time_commitment');
            $table->integer('attendance');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('ProjectID')->references('ProjectID')->on('projects');
            $table->foreign('MemberID')->references('memberID')->on('members');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_evals');
    }
};
