<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Models\Character;
use App\Models\Technique;
use App\Models\Fight;
use App\Models\Stage;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.home')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function create(Character $character, Technique $technique, Stage $stage)
    {
        return view('posts.create')->with(['characters' => $character->get(), 'techniques' => $technique->get(), 'stages' => $stage->get()]);
        //（保留中）$techniqueはvs_character（相手キャラ）と一致したものを取得する必要がある。
        //fightsテーブルはpostsテーブルとstagesテーブルの中間テーブルとしても機能している。
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $input_post += ['user_id' => $request->user()->id];
        $post->fill($input_post)->save();
        foreach($request['fight'] as $input_fight)//対戦数の繰り返しを増やしたい場合はcreate.blade.phpの@forを変更する。
        {
            $fight = new Fight();
            $input_fight += ['post_id' => $post->id];
            $fight->fill($input_fight)->save();//fightsテーブルへの保存
        }
        return redirect('/posts/' . $post->id);
    }
}
