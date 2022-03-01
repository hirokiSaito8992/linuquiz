<?php

namespace Database\Seeds\Linuc202\HttpProxy;

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
            //Httpに関して問題1の選択肢
            [
                'choise' => 'AccessLog',
                'correct_answer' => '0',
                'question_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'CustomLog',
                'correct_answer' => '1',
                'question_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ErrorLog',
                'correct_answer' => '0',
                'question_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'FailLog',
                'correct_answer' => '0',
                'question_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題2の選択肢
            [
                'choise' => 'nginxはウェブサーバとして使用することができる',
                'correct_answer' => '0',
                'question_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'nginxはリバースプロキシサーバとして使用することができる',
                'correct_answer' => '0',
                'question_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'nginxはメールサービスのプロキシサーバとして使用することができる',
                'correct_answer' => '0',
                'question_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'nginxはメールサービスとウェブサービス以外のプロキシには使用できない',
                'correct_answer' => '1',
                'question_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'SSLProtocolディレクティブでSSLv2を有効にする',
                'correct_answer' => '0',
                'question_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ServerTokensディレクティブにOSを設定する',
                'correct_answer' => '0',
                'question_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'HeaderディレクティブでX-Powered-Byヘッダの削除設定をする',
                'correct_answer' => '1',
                'question_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ServerSignatureディレクティブにOnを設定する',
                'correct_answer' => '0',
                'question_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'connections',
                'correct_answer' => '0',
                'question_id' => '14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'process_connections',
                'correct_answer' => '0',
                'question_id' => '14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'max_connections',
                'correct_answer' => '0',
                'question_id' => '14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'worker_connections',
                'correct_answer' => '1',
                'question_id' => '14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
