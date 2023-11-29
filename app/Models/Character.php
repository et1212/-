<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    
    public function techniques()
    {
        return $this->hasMany(Technique::class);
    }
    
    public function posts()//通常のリレーションとmy_character_idのための記述
    {
        return $this->hasmany(Post::class, 'my_character_id');
    }
    
    public function posts_vs_character()//vs_character_id用の記述
    {
        return $this->hasmany(Post::class, 'vs_character_id');
    }
    
    public function getByCharacter(int $limit_count = 15)//自キャラを取得する記述
    {
        return  $this->posts()->with('character')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function getByCharacter_vs(int $limit_count = 15)//相手キャラを取得
    {
        return  $this->posts_vs_character()->with('character_vs_character')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
