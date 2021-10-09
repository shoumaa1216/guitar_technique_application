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
          'url' => '',
        ],
        [
          'id'=>'2',
          'name'=>'ビブラート',
          'url' => '',
        ],
        [
          'id'=>'3',
          'name'=>'ハーモニクス',
          'url' => '',
        ],
        [
         'id'=>'4',
         'name'=>'ピッキングハーモニクス',
         'url' => '',
        ],
         [
          'id'=>'5',
          'name'=>'ハーモニクス＆アーミング',
          'url' => '',
        ],
        [
          'id'=>'6',
          'name'=>'ピックスクラッチ',
          'url' => '',
        ],
        [
          'id'=>'7',
          'name'=>'ブリッジミュート',
          'url' => '',
        ],
        [
         'id'=>'8',
         'name'=>'カッティング',
         'url' => '',
        ],
        [
          'id'=>'9',
          'name'=>'ユニゾンチョーキング',
          'url' => '',
        ],
        [
          'id'=>'10',
          'name'=>'スライド',
          'url' => '',
        ],
        [
         'id'=>'11',
         'name'=>'トリル',
         'url' => '',
        ],
         [
         'id'=>'12',
         'name'=>'タッピング',
         'url' => '',
        ],
         [
         'id'=>'13',
         'name'=>'グリッサンド',
         'url' => '',
        ],
        ]
      );
    }
}
