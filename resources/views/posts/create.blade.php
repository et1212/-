<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        投稿する
    </x-slot>
    <body>
        <form action="/posts" method="POST">
            @csrf
            <div class="my_character">
                <h2>自キャラ</h2>
                <select name="post[my_character_id]">
                    @foreach($characters as $character)
                        <option value="{{ $character->id }}">{{ $character->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="vs_character">
                <h2>相手キャラ</h2>
                <select name="post[vs_character_id]">
                    @foreach($characters as $character)
                        <option value="{{ $character->id }}">{{ $character->name }}</option>
                    @endforeach
                </select>
                <h2>一番困った技</h2>
                <select name="post[technique_id]">
                    @foreach($techniques as $technique)
                        <option value="{{ $technique->id }}">{{ $technique->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="fight">
                @for ($i=1;$i<=5;$i++)
                <div class="fight{{ $i }}">
                    <h2>{{ $i }}戦目</h2>
                    <input type="hidden" name="fight[{{ $i }}][set_count]" value="{{ $i }}">
                    <select name="fight[{{ $i }}][stage_id]">
                        @foreach($stages as $stage)
                            <option value="{{ $stage->id }}">{{ $stage->name }}</option>
                        @endforeach
                    </select>
                    <input type="radio" name="fight[{{ $i }}][result]" value="勝ち">勝ち
                    <input type="radio" name="fight[{{ $i }}][result]" value="負け">負け
                    <input type="radio" name="fight[{{ $i }}][result]" value="無し" checked>無し
                </div>
                @endfor
            </div>
            <div class="memo">
                <h2>メモ</h2>
                <textarea name="post[memo]" placeholder="最速風神拳に蹂躙された。">{{ old('post.memo') }}</textarea>
                <p class="memo__error" style="color:red">{{ $errors->first('post.memo') }}</p>
            </div>
            <input type="submit" value="投稿する"/>
        </form>
    </body>
</x-app-layout>