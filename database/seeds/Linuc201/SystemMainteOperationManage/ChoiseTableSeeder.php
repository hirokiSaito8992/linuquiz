<?php

namespace Database\Seeds\Linuc201\SystemMainteOperationManage;

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
            //システム保守構成に関して問題1の選択肢
            [
                'choise' => 'PlaybookはXMLの形式で記述する',
                'correct_answer' => '0',
                'question_id' => '49',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Playbookは1つのファイルで記述しなければならない',
                'correct_answer' => '0',
                'question_id' => '49',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Playbookは設定対象のホスト毎に用意しなければならない',
                'correct_answer' => '0',
                'question_id' => '49',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Playbookはリモートホストへの設定作業等を記載するものである',
                'correct_answer' => '1',
                'question_id' => '49',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            //問題2の選択肢
            [
                'choise' => '操作を何回行っても同じ結果が得られること',
                'correct_answer' => '1',
                'question_id' => '50',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ユーザアクセス増加が見込まれる際にサーバ台数を増加させる操作',
                'correct_answer' => '0',
                'question_id' => '50',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '繰り返し実行される操作内容を定義すること',
                'correct_answer' => '0',
                'question_id' => '50',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'それまで手動実行していた内容を自動的に実行すること',
                'correct_answer' => '0',
                'question_id' => '50',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'free -l',
                'correct_answer' => '0',
                'question_id' => '51',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'free -t',
                'correct_answer' => '1',
                'question_id' => '51',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'free -h',
                'correct_answer' => '0',
                'question_id' => '51',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'free -s',
                'correct_answer' => '0',
                'question_id' => '51',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'gzip files_oss-1.0.0.zip',
                'correct_answer' => '0',
                'question_id' => '52',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'gunzip files_oss-1.0.0.zip',
                'correct_answer' => '0',
                'question_id' => '52',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'unzip files_oss-1.0.0.zip',
                'correct_answer' => '1',
                'question_id' => '52',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'gzip -d files_oss-1.0.0.zip',
                'correct_answer' => '0',
                'question_id' => '52',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => '/etc/issue',
                'correct_answer' => '0',
                'question_id' => '53',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '/etc/issue.net',
                'correct_answer' => '0',
                'question_id' => '53',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '/etc/motd',
                'correct_answer' => '1',
                'question_id' => '53',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '/etc/fstab',
                'correct_answer' => '0',
                'question_id' => '53',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
