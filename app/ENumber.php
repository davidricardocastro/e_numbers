<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ENumber extends Model
{
    protected $fillable = [
        'group_type',
        'code',
        'name',
        'purpose',
        'status'                
    ];
    
    protected $guarded = [
        'id'
    ];
}

