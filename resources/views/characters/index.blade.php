<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <body>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h3>
                        <a href="/posts/{{ $post->id }}">投稿{{ $post->id }}</a>
                    </h3>
                    <h6>{{ $post->user->name }}</h6>
                    <h4 class='created_at'>{{ $post->updated_at }}</h4>
                    <div class='character'>
                        <a href="/characters/my/{{ $post->character->id }}">{{ $post->character->name }}</a>
                        <p>VS</p>
                        <a href="/characters/vs/{{ $post->character_vs_character->id }}">{{ $post->character_vs_character->name }}</a>
                    </div>
                    <h4 class='technique'>困った技：{{ $post->technique->name }}</h4>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</x-app-layout>