<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->insert([
            'name' => '戦場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('stages')->insert([
            'name' => '小戦場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('stages')->insert([
            'name' => '終点',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('stages')->insert([
            'name' => 'ポケモンスタジアム2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('stages')->insert([
            'name' => 'すま村',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('stages')->insert([
            'name' => '村と街',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('stages')->insert([
            'name' => 'ホロウバスティオン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('stages')->insert([
            'name' => 'プププランド',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
