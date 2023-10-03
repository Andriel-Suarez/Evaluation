<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal_eval extends Model
{
    protected $primaryKey = 'personaleval_ID'; // Set the primary key
    protected $fillable = [
        'ProjectID',
        'MemberID',
        'seriousness',
        'sense_of_responsibility',
        'positiveness',
        'cooperation',
        'general',
        'specialty',
        'comprehenssion',
        'expression',
        'analysis',
        'creativity',
        'vitality',
        'insight',
        'planning',
        'execution',
        'judgement',
        'negotiation',
        'leadership',
        'potential',
        'overall_rating',
    ];
}
