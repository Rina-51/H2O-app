<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
    
    public function type()
    {
        return $this->belongsTo(Type::class);
        
    }

    public function groups()   
    {
        return $this->belongsToMany(Group::class, 'post_groups');  
    }

}
