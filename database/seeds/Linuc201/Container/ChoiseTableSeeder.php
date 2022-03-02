<?php

namespace Database\Seeds\Linuc201\Container;

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
            //コンテナに関して問題1の選択肢
            [
                'choise' => 'docker images は、コンテナイメージを取得する',
                'correct_answer' => '0',
                'question_id' => '59',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'docker pull は、コンテナイメージを取得する',
                'correct_answer' => '1',
                'question_id' => '59',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'docker rmi は、コンテナを削除する',
                'correct_answer' => '0',
                'question_id' => '59',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'docker exec は、稼働中のコンテナでコマンドを実行する',
                'correct_answer' => '1',
                'question_id' => '59',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題2の選択肢
            [
                'choise' => 'docker stop 64c383ce87ae',
                'correct_answer' => '0',
                'question_id' => '60',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'docker rmi -f 64c383ce87ae',
                'correct_answer' => '1',
                'question_id' => '60',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'docker rm -f 64c383ce87ae',
                'correct_answer' => '0',
                'question_id' => '60',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'docker image rm -f 64c383ce87ae',
                'correct_answer' => '1',
                'question_id' => '60',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'ハイパーバイザ上で稼働する仮想マシンに比べて、サイズが小さくなる',
                'correct_answer' => '1',
                'question_id' => '61',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'カーネル起動や停止、余分なサービス起動や停止がない。また起動と停止が速い',
                'correct_answer' => '1',
                'question_id' => '61',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'コンテナの中に含まれるカーネルを実行する',
                'correct_answer' => '0',
                'question_id' => '61',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'コンテナの中にはライブラリが含まれない',
                'correct_answer' => '0',
                'question_id' => '61',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'カーネルのリソースを分離、独立した区画に分ける機能である',
                'correct_answer' => '0',
                'question_id' => '62',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'プロセスIDの分離と独立、ユーザIDの分離と独立など機能によって複数の種類がある',
                'correct_answer' => '0',
                'question_id' => '62',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'カーネルのネットワークリソースは名前空間によって分離・独立させることはできない',
                'correct_answer' => '1',
                'question_id' => '62',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'コンテナのリソースの分離と独立に利用される',
                'correct_answer' => '0',
                'question_id' => '62',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => 'コンテナのリソース制限にはカーネルの機能であるcgroupsを利用する',
                'correct_answer' => '0',
                'question_id' => '63',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Dockerの場合、コンテナのリソース制限は「docker run」コマンドオプションで指定する',
                'correct_answer' => '0',
                'question_id' => '63',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'コンテナのリソース制限はCPUのみでメモリ容量の制限はない',
                'correct_answer' => '1',
                'question_id' => '63',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'コンテナのリソース制限は疑似ファイルシステムcgroupfsのパラメータに設定される',
                'correct_answer' => '0',
                'question_id' => '63',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
