<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'memo',
        'my_character_id',
        'vs_character_id',
        'user_id',
        'technique_id'
    ];
    
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function technique()
    {
        return $this->belongsTo(Technique::class);
    }
    
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
    
    public function fights()
    {
        return $this->hasMany(Fight::class);
    }
    
    public function stages()
    {
        return $this->belongsToMany(Stage::class);
    }
    
    public function getPaginateByLimit(int $limit_count=10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
