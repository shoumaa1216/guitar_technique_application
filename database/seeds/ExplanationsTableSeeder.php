<?php

use Illuminate\Database\Seeder;

class ExplanationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                  DB::table("explanations")->truncate();
                 DB::table("explanations")->insert(
      [
        [
          'id'=>'1',
          'technique_id'=>'1',
          'explanation'=>'ギターの弦を持ち上げ音程をあげるテクニックのこと',
        ],
        [
          'id'=>'2',
          'technique_id'=>'2',
          'explanation'=>'チョーキングを繰り返して音にゆらぎを作り情感を表現するテクニックのこと',
        ],
        [
          'id'=>'3',
          'technique_id'=>'3',
          'explanation'=>'特定のフレットに指を触れ、ピッキングした後に指を離すと、普通に弦を弾いたときよりもやわらかい高音が出すテクニックのこと',
        ],
        [
          'id'=>'4',
          'technique_id'=>'4',
          'explanation'=>'弦をピッキングした直後に（ピッキングした手の）親指の側面を弦にあてて、押えているフレットポジションの音程よりも高い「ピキーン」という金属的な倍音を得るギターの演奏方法のこと',
        ],
        [
          'id'=>'5',
          'technique_id'=>'5',
          'explanation'=>'アームを押し下げた状態で開放弦を弾いた瞬間にハーモニクスを出しアームをアップさせるテクニックのこと',
        ],
        [
          'id'=>'6',
          'technique_id'=>'6',
          'explanation'=>'弦にピックを当てて滑らせるテクニックのこと',
        ],
        [
          'id'=>'7',
          'technique_id'=>'7',
          'explanation'=>'ピッキング側の手の腹の部分でブリッジ付近にかぶせてミュートするテクニックのこと',
        ],
        [
          'id'=>'8',
          'technique_id'=>'8',
          'explanation'=>'ミュートした弦とコードを混ぜてストロークして弾く演奏技法のこと',
        ],
        [
          'id'=>'9',
          'technique_id'=>'9',
          'explanation'=>'チョーキングの音と人差し指で押さえているフレットの音を同じに(ユニゾン)させるテクニックのこと',
        ],
        [
          'id'=>'10',
          'technique_id'=>'10',
          'explanation'=>'押弦したまま指をずらし始点と終点の音を途切れさせずに音を繋ぐテクニックのこと',
        ],
        [
          'id'=>'11',
          'technique_id'=>'11',
          'explanation'=>'ハンマリング・オンとプリング・オフを交互に繰り返すギター奏法のこと',
        ],
         [
          'id'=>'12',
          'technique_id'=>'12',
          'explanation'=>'特にエレクトリックギターや、それに類する弦楽器において、指板上の弦を指で叩き付けて押弦したりそのまま横に弾いたりして音を出す技法のこと',
        ],
         [
          'id'=>'13',
          'technique_id'=>'13',
          'explanation'=>'スライドとよく似た奏法の一つで、 鳴らした音を、上下方向に向かって、音（指）を滑らせて処理をしたり、目的の音を出す際に、上下方向から音（指）を滑らせて鳴らす技法のこと',
        ],
        ]
      );
    }
}
