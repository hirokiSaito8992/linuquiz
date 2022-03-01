<?php

namespace Database\Seeds\Linuc202\SystemSecurity;

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
            //SystemScurityに関して問題1の選択肢
            [
                'choise' => 'OpenVASは、脆弱性スキャナである',
                'correct_answer' => '1',
                'question_id' => '24',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'OpenVASは、ポートスキャンツールである',
                'correct_answer' => '0',
                'question_id' => '24',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'OpenSCAPは、システム構成や脆弱性検査を行うツールである',
                'correct_answer' => '1',
                'question_id' => '24',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'OpenSCAPは、侵入検知システムである',
                'correct_answer' => '0',
                'question_id' => '24',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題2の選択肢
            [
                'choise' => '# firewall-cmd --list-all',
                'correct_answer' => '1',
                'question_id' => '25',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '# firewall-cmd --get-default-zone',
                'correct_answer' => '0',
                'question_id' => '25',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '# firewall-cmd --get-active-zone',
                'correct_answer' => '0',
                'question_id' => '25',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '# firewall-cmd --get-service',
                'correct_answer' => '0',
                'question_id' => '25',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'firewall-cmd --permanent --new-zone=management',
                'correct_answer' => '1',
                'question_id' => '26',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'firewall-cmd --new-zone=management',
                'correct_answer' => '0',
                'question_id' => '26',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'firewall-cmd --query-interface=enp0s8 --zone=management',
                'correct_answer' => '0',
                'question_id' => '26',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'firewall-cmd --add-interface=enp0s8 --zone=management',
                'correct_answer' => '1',
                'question_id' => '26',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'Match User ユーザ名 の設定を記述すると、ユーザ毎のSSH接続設定を行うことができる',
                'correct_answer' => '0',
                'question_id' => '27',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Match Group グループ名 の設定を記述すると、グループ毎のSSH接続設定を行うことができる',
                'correct_answer' => '0',
                'question_id' => '27',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Match Local IPアドレス の設定を記述すると、LISTENするIPアドレス毎のSSH接続設定を行うことができる',
                'correct_answer' => '1',
                'question_id' => '27',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Match Host IPアドレス の設定を記述すると、接続元IPアドレス毎のSSH接続設定を行うことができる',
                'correct_answer' => '0',
                'question_id' => '27',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => 'リモートからのブルートフォース攻撃を防ぐことができるプログラムである',
                'correct_answer' => '0',
                'question_id' => '28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '設定ファイルに指定したログを解析して攻撃検出を行うことができる',
                'correct_answer' => '0',
                'question_id' => '28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '攻撃を検出すると、設定に従って接続元からのパケットを遮断することができる',
                'correct_answer' => '0',
                'question_id' => '28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '攻撃検出時に管理者へメール通知する機能はない',
                'correct_answer' => '1',
                'question_id' => '28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
