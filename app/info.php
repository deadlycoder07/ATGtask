<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class info extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'pincode',
    ];
    
}
