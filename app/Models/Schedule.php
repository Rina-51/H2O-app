<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    
    public function groups()   
    {
        return $this->belongsToMany(Group::class, 'schedule_groups');  
    }

}
