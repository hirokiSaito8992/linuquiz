<?php

namespace Database\Seeds\Linuc202\DNS;

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
            //DNSに関して問題1の選択肢
            [
                'choise' => 'chroot jail',
                'correct_answer' => '0',
                'question_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'TSIG',
                'correct_answer' => '0',
                'question_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'DNSSEC',
                'correct_answer' => '1',
                'question_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'DANE',
                'correct_answer' => '0',
                'question_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題2の選択肢
            [
                'choise' => 'host 192.168.0.2 127.0.0.1',
                'correct_answer' => '1',
                'question_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'host 127.0.0.1 192.168.0.2',
                'correct_answer' => '0',
                'question_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'dig @127.0.0.1 192.168.0.2 A',
                'correct_answer' => '0',
                'question_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'nslookup 192.168.0.2 127.0.0.1',
                'correct_answer' => '1',
                'question_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => '# rndc restart',
                'correct_answer' => '0',
                'question_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '# rndc reload',
                'correct_answer' => '0',
                'question_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '# rndc reload 《ゾーン名》',
                'correct_answer' => '1',
                'question_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '# rndc reconfig',
                'correct_answer' => '0',
                'question_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'ゾーンの正引き・逆引きをチェックする',
                'correct_answer' => '0',
                'question_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'BINDの設定ファイルの構文をチェックする',
                'correct_answer' => '0',
                'question_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ゾーンファイルの構文と整合性をチェックする',
                'correct_answer' => '0',
                'question_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ゾーン内容を、指定フォーマットで出力する',
                'correct_answer' => '1',
                'question_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => 'channel',
                'correct_answer' => '1',
                'question_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'severity',
                'correct_answer' => '1',
                'question_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'category',
                'correct_answer' => '1',
                'question_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'directory',
                'correct_answer' => '0',
                'question_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
