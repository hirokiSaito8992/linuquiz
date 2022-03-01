<?php

namespace Database\Seeds\Linuc202\SystemArchitecture;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChoiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choises')->insert([
            //SystemArchitectureに関して問題1の選択肢
            [
                'choise' => '「HAクラスタ」とは、アクティブ系とスタンバイ系のノードから構成されるシステムのことである',
                'correct_answer' => '0',
                'question_id' => '29',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '「フェイルオーバー」とは、サービスを提供しているマシンが停止した場合に、待機している予備のマシンでサービスを引き継ぐ処理のことである',
                'correct_answer' => '0',
                'question_id' => '29',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Pacemaker」とは、単独でHAクラスタを稼働させることのできるクラスタリングソフトウェアである',
                'correct_answer' => '1',
                'question_id' => '29',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ロードバランシング」とは、複数台のサーバー間で負荷を分散することである',
                'correct_answer' => '0',
                'question_id' => '29',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            //問題2の選択肢
            [
                'choise' => 'データのバックアップ、及びリストアを行う仕組みのことである',
                'correct_answer' => '0',
                'question_id' => '30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'データをリアルタイムで同期する仕組みのことである',
                'correct_answer' => '1',
                'question_id' => '30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'DRBDなどのソフトウェアで実行される',
                'correct_answer' => '1',
                'question_id' => '30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Amanda・Baculaなどのソフトウェアで実行される',
                'correct_answer' => '0',
                'question_id' => '30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'RPOは長いほどシステムが安定して稼働していると考えられる',
                'correct_answer' => '0',
                'question_id' => '31',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'RTOは短いほどダウンタイムを短縮することができる',
                'correct_answer' => '1',
                'question_id' => '31',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'MTTRは長いほどシステムが安定して稼働していると考えられる',
                'correct_answer' => '0',
                'question_id' => '31',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'MTBFは短いほどダウンタイムを短縮することができる',
                'correct_answer' => '0',
                'question_id' => '31',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'スケールアップとは、サーバへのアクセス増加に対する処置としてサーバスペックを上げるものである',
                'correct_answer' => '1',
                'question_id' => '32',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'スケールダウンとは、サーバ台数を減少させサーバへのアクセスに対して最適化を行うものである',
                'correct_answer' => '0',
                'question_id' => '32',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'スケールアウトとは、サーバへのアクセス増加に対する処置としてサーバスペックを上げるものである',
                'correct_answer' => '0',
                'question_id' => '32',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'スケールインとは、サーバ台数を減少させサーバへのアクセスに対して最適化を行うものである',
                'correct_answer' => '1',
                'question_id' => '32',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => 'エフェメラルストレージは、インスタンスを破棄した場合にも破棄されない',
                'correct_answer' => '0',
                'question_id' => '33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '永続保存を必要とするデータは、永続化ストレージに保存する',
                'correct_answer' => '1',
                'question_id' => '33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '外部ネットワークからIaaS上のインスタンスへ通信させたい場合、フローティングIPアドレスを使用する',
                'correct_answer' => '1',
                'question_id' => '33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'IaaS上のインスタンスへのアクセスは、インスタンスのファイアウォール機能で制御する',
                'correct_answer' => '0',
                'question_id' => '33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
