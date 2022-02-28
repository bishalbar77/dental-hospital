<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded= [];
    protected $table = 'appointments'; 
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
