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
    
    public function character()//通常のリレーションとmy_character_idのための記述
    {
        return $this->belongsTo(Character::class, 'my_character_id');
    }
    
    public function character_vs_character()//vs_character_id用の記述
    {
        return $this->belongsTo(Character::class, 'vs_character_id');
    }
    
    public function fights()
    {
        return $this->hasMany(Fight::class);
    }
    
    public function stages()
    {
        return $this->belongsToMany(Stage::class, 'fights');//fightsテーブルをpostsテーブルおよびstagesテーブルの中間テーブルとして位置づける
    }
    
    public function getPaginateByLimit(int $limit_count=10)
    {
        return $this::with('user', 'technique', 'character', 'character_vs_character')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
