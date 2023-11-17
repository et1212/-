<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    protected $fillable = [
        'post_id',
        'stage_id',
        'result',
        'set_count'
    ];
    
    use HasFactory;
    
    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
