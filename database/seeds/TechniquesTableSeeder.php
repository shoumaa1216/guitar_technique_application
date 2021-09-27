<?php

use Illuminate\Database\Seeder;

class TechniquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("techniques")->truncate();
        DB::table("techniques")->insert(
      [
        [
          'id'=>'1',
          'name'=>'チョーキング',
        ],
        [
          'id'=>'2',
          'name'=>'ビブラート',
        ],
        [
          'id'=>'3',
          'name'=>'ハーモニクス',
        ],
        [
         'id'=>'4',
         'name'=>'ピッキングハーモニクス',
        ],
         [
          'id'=>'5',
          'name'=>'ハーモニクス＆アーミング',
        ],
        [
          'id'=>'6',
          'name'=>'ピックスクラッチ',
        ],
        [
          'id'=>'7',
          'name'=>'ブリッジミュート',
        ],
        [
         'id'=>'8',
         'name'=>'カッティング',
        ],
        [
          'id'=>'9',
          'name'=>'ユニゾンチョーキング',
        ],
        [
          'id'=>'10',
          'name'=>'スライド',
        ],
        [
         'id'=>'11',
         'name'=>'トリル',
        ],
         [
         'id'=>'12',
         'name'=>'タッピング',
        ],
         [
         'id'=>'13',
         'name'=>'グリッサンド',
        ],
        ]
      );
    }
}
