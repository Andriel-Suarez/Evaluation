<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'memberID'; 
    protected $fillable = ['memberName', 'Position', 'BU', 'Batch'];
}