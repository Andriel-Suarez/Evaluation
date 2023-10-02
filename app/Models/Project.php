<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'ProjectID'; // Set the primary key
    protected $fillable = ['ProjectName', 'Evaluator', 'EvalPeriod', 'WorkLoc', 'EvalDate'];
}