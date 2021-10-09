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
          'url' => 'haQ4E4CSRRA',
        ],
        [
          'id'=>'2',
          'name'=>'ビブラート',
          'url' => 'B0VbMZMDzM4',
        ],
        [
          'id'=>'3',
          'name'=>'ハーモニクス',
          'url' => 'vTJqwaF9mIQ',
        ],
        [
         'id'=>'4',
         'name'=>'ピッキングハーモニクス',
         'url' => 'YG8UFLrSjYA',
        ],
         [
          'id'=>'5',
          'name'=>'ハーモニクス＆アーミング',
          'url' => 'WPgJk2CuRac',
        ],
        [
          'id'=>'6',
          'name'=>'ピックスクラッチ',
          'url' => 'JWPA6DXUpxM',
        ],
        [
          'id'=>'7',
          'name'=>'ブリッジミュート',
          'url' => 'eFv0btvRKAo',
        ],
        [
         'id'=>'8',
         'name'=>'カッティング',
         'url' => 'ZJL8WXLYDSg',
        ],
        [
          'id'=>'9',
          'name'=>'ユニゾンチョーキング',
          'url' => 'd9klw3olE9Q',
        ],
        [
          'id'=>'10',
          'name'=>'スライド',
          'url' => 'U9P9SxjoHsE',
        ],
        [
         'id'=>'11',
         'name'=>'トリル',
         'url' => '6UsuvHmVLQ4',
        ],
         [
         'id'=>'12',
         'name'=>'タッピング',
         'url' => 'vY7clzDxDWs',
        ],
         [
         'id'=>'13',
         'name'=>'グリッサンド',
         'url' => 'Fc9xqFoj0JI',
        ],
        ]
      );
    }
}
