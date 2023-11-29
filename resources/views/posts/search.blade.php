<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        投稿を探す
    </x-slot>
    <body>
        <form  action="/characters/search_my" method="GET">
            @csrf
            <div class="my_character">
                <h2>自キャラで検索</h2>
                <select name="search_my">
                    <option value="">未選択</option>
                    @foreach($characters as $character)
                        <option value="{{ $character->id }}">{{ $character->name }}</option>
                    @endforeach
                </select>
                <input type="submit" value="検索する"/>
            </div>
        </form>
        <form  action="/characters/search_vs" method="GET">
            @csrf
            <div class="vs_character">
                <h2>相手キャラで検索</h2>
                <select name="search_vs">
                    <option value="">未選択</option>
                    @foreach($characters as $character)
                        <option value="{{ $character->id }}">{{ $character->name }}</option>
                    @endforeach
                </select>
                <input type="submit" value="検索する"/>
            </div>
        </form>
        <form  action="/characters/search_myvs" method="GET">
            @csrf
            <div class="myvs_character">
                <h2>両キャラ指定して検索</h2>
                <select name="search_my[myvs]">
                    <option value="">未選択</option>
                    @foreach($characters as $character)
                        <option value="{{ $character->id }}">{{ $character->name }}</option>
                    @endforeach
                </select>
                <p>VS</p>
                <select name="search_vs[myvs]">
                    <option value="">未選択</option>
                    @foreach($characters as $character)
                        <option value="{{ $character->id }}">{{ $character->name }}</option>
                    @endforeach
                </select>
                <input type="submit" value="検索する"/>
            </div>
        </form>
    </body>
</x-app-layout>