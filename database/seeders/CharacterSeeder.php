<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            'name' => 'マリオ',
            'image' => '/smemo/public/storage/mario.png',
            'created_at' => new Datetime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('characters')->insert([
            'name' => 'ドンキーコング',
            'image' => '/smemo/public/storage/donkey.png',
            'created_at' => new Datetime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('characters')->insert([
            'name' => 'リンク',
            'image' => '/smemo/public/storage/link.png',
            'created_at' => new Datetime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('characters')->insert([
            'name' => 'サムス',
            'image' => '/smemo/public/storage/samus.png',
            'created_at' => new Datetime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
