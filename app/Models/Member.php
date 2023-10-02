<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'memberID'; // Set the primary key
    protected $fillable = ['memberName', 'Position', 'BU', 'Batch'];
}