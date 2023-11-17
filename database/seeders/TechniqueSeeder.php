<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class TechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techniques')->insert([
           'name' => '弱攻撃',
           'frame_startup' => '2',
           'total_frames' => '33（3段目）',
           'damage' => '7.9',
           'on_shield' => '25',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => 'ダッシュ攻撃',
           'frame_startup' => '6',
           'total_frames' => '37',
           'damage' => '8',
           'on_shield' => '17',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '横強',
           'frame_startup' => '5',
           'total_frames' => '25',
           'damage' => '7',
           'on_shield' => '13',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '上強',
           'frame_startup' => '5',
           'total_frames' => '29',
           'damage' => '5.5',
           'on_shield' => '18',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '下強',
           'frame_startup' => '5',
           'total_frames' => '27',
           'damage' => '7',
           'on_shield' => '15',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '横スマッシュ',
           'frame_startup' => '15',
           'total_frames' => '47',
           'damage' => '17.8',
           'on_shield' => '20',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '上スマッシュ',
           'frame_startup' => '9',
           'total_frames' => '39',
           'damage' => '14',
           'on_shield' => '20',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '下スマッシュ',
           'frame_startup' => '5',
           'total_frames' => '43',
           'damage' => '10',
           'on_shield' => '30',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '空N',
           'frame_startup' => '3',
           'total_frames' => '45',
           'damage' => '8',
           'on_shield' => '2',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '空前',
           'frame_startup' => '16',
           'total_frames' => '59',
           'damage' => '12',
           'on_shield' => '12',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '空後',
           'frame_startup' => '6',
           'total_frames' => '33',
           'damage' => '10.5',
           'on_shield' => '2',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '空上',
           'frame_startup' => '4',
           'total_frames' => '30',
           'damage' => '7',
           'on_shield' => '3',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '空下',
           'frame_startup' => '5',
           'total_frames' => '37',
           'damage' => '12.5',
           'on_shield' => '11',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => 'NB',
           'frame_startup' => '17',
           'total_frames' => '49',
           'damage' => '5',
           'on_shield' => '',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '横B',
           'frame_startup' => '12',
           'total_frames' => '35',
           'damage' => '7',
           'on_shield' => '',
           'reference' => '反射持ち',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '上B',
           'frame_startup' => '3',
           'total_frames' => '',
           'damage' => '8.6',
           'on_shield' => '',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => '下B',
           'frame_startup' => '',
           'total_frames' => '67',
           'damage' => '',
           'on_shield' => '',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
        DB::table('techniques')->insert([
           'name' => 'つかみ',
           'frame_startup' => '6',
           'total_frames' => '34',
           'damage' => '',
           'on_shield' => '',
           'reference' => '',
           'created_at' => new DateTime(),
           'updated_at' => new DateTime(),
           'character_id' => 2,
        ]);
    }
}
