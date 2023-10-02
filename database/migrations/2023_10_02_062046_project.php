<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('ProjectID'); // Primary key with the name 'ProjectID'
            $table->string('ProjectName');
            $table->string('Evaluator');
            $table->string('EvalPeriod');
            $table->string('WorkLoc');
            $table->date('EvalDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
