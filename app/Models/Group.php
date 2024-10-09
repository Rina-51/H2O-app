<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    
    public function users()   
    {
        return $this->belongsToMany(User::class, 'user_groups');
    }

    public function posts()   
    {
        return $this->belongsToMany(Post::class, 'post_groups');  
    }

    public function schedules()   
    {
        return $this->belongsToMany(Schedule::class, 'schedule_groups');  
    }
    
    protected $fillable = ['name', 'status'];

}
