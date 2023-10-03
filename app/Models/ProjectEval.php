<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectEval extends Model
{
    protected $primaryKey = 'ProjectEval_ID'; // Set the primary key
    protected $fillable = [
        'ProjectID',
        'MemberID',
        'seriousness',
        'overall_rating',
        'Name',
        'position',
        'department',
        'batch',
        'quality',
        'schedule',
        'contribution',
        'difficulty',
        'reporting',
        'technical_capability',
        'sense_of_ownership',
        'teamwork',
        'leadership',
        'time_commitment',
        'attendance',
    ];

    // Define the relationships
    public function project()
    {
        return $this->belongsTo(Project::class, 'ProjectID');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'MemberID');
    }
}