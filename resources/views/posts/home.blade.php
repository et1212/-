<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        Home
    </x-slot>
    <body>
        <h1>スマメモ</h1>
        <p>－スマブラ対戦を記録するブログ</p>
        <div class='how to use'>
            <h5>使い方</h5>
            <h3>まずは他の人の投稿をみてみよう！</h3>
            <h3>投稿してみよう！</h3>
        </div>
        <div class='posts'>
            <h5>Recent Posts</h5>
            @foreach ($posts as $post)
                <div class='post'>
                    <h3>
                        <a href="/posts/{{ $post->id }}">投稿{{ $post->id }}</a>
                    </h3>
                    <h6>{{ $post->user->name }}</h6>
                    <h4 class='created_at'>{{ $post->updated_at }}</h4>
                    <div class='character'>    
                        <h2 class='character'>{{ $post->character->name }}VS{{ $post->character_vs_character->name }}</h2>
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