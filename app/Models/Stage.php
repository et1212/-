<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    
    public function fights()
    {
        return $this->hasMany(Fight::class);
    }
    
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
