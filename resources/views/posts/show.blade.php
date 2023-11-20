<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        Home
    </x-slot>
    <body>
        <div class='post'>
            <h3>投稿{{ $post->id }}</h3>
            <h6>{{ $post->user->name }}</h6>
            <h4 class='created_at'>{{ $post->updated_at }}</h4>
            <h2 class='character'>{{ $post->character->name }}VS{{ $post->character_vs_character->name }}</h2>
            <h4 class='technique'>一番困った技：{{ $post->technique->name }}</h4>
            <div class='fight'>    
                @foreach($post->fights as $fight)
                    <p>{{ $fight->set_count }}戦目</p>
                    <p>{{ $fight->result }}</p>
                    <p>{{ $fight->stage->name }}</p>
                @endforeach
            </div>
            <div class="memo">
                <h2>メモ</h2>
                <p>{{ $post->memo }}</p>
            </div>
        </div>
    </body>
</x-app-layout>