<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personal_evals', function (Blueprint $table) {
            $table->id('personaleval_ID');
            $table->unsignedBigInteger('ProjectID');
            $table->unsignedBigInteger('MemberID');
            $table->integer('seriousness');
            $table->integer('sense_of_responsibility');
            $table->string('positiveness');
            $table->string('cooperation');
            $table->string('general');
            $table->string('specialty');
            $table->integer('comprehenssion');
            $table->integer('expression');
            $table->integer('analysis');
            $table->integer('creativity');
            $table->integer('vitality');
            $table->integer('insight');
            $table->integer('planning');
            $table->integer('execution');
            $table->integer('judgement');
            $table->integer('negotiation');
            $table->integer('leadership');
            $table->integer('potential');
            $table->integer('overall_rating');
            $table->timestamps();

            //Foreign key
            $table->foreign('ProjectID')->references('ProjectID')->on('projects');
            $table->foreign('MemberID')->references('memberID')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_evals');
    }
};
