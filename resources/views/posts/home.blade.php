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
                    <h2 class=''>{{ $post->title }}</h2>
                    <p class=''>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</x-app-layout>