<?php

namespace Database\Seeds\Linuc202\NwClientMana;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
            //問題１の選択肢
            [
                'choise' => 'host clientpc {
                    hardware ethernet 0a:1b:2c:3d:4e:5f;
                    ip-address 10.10.10.100;
                    }',
                'correct_answer' => '0',
                'question_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'host clientpc {
                    hardware ethernet 0a:1b:2c:3d:4e:5f;
                    fixed-address 10.10.10.100;
                    }',
                'correct_answer' => '1',
                'question_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'host clientpc {
                    hardware ethernet 0a:1b:2c:3d:4e:5f;
                    static-address 10.10.10.100;
                    }',
                'correct_answer' => '0',
                'question_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'host clientpc {
                    hardware ethernet 0a:1b:2c:3d:4e:5f;
                    address 10.10.10.100;
                    }',
                'correct_answer' => '0',
                'question_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題２の選択肢
            [
                'choise' => 'radvdは、IPv6 ルータ広告のためのデーモンである',
                'correct_answer' => '1',
                'question_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'radvdの設定ファイルは、radvd.cfである',
                'correct_answer' => '0',
                'question_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'radvdは、IPv4にも対応している',
                'correct_answer' => '0',
                'question_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'radvdは、Router ADVertisement Daemonの略である',
                'correct_answer' => '1',
                'question_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'pam_unix',
                'correct_answer' => '0',
                'question_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'pam_cracklib',
                'correct_answer' => '2',
                'question_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'pam_limits',
                'correct_answer' => '0',
                'question_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'pam_listfile',
                'correct_answer' => '0',
                'question_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'ldapsearch は、LDAPサーバに登録されているデータを検索することができる',
                'correct_answer' => '0',
                'question_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ldaplist は、LDAPサーバに登録されているデータを一覧表示することができる',
                'correct_answer' => '1',
                'question_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ldapadd は、LDAPサーバにデータを追加登録することができる',
                'correct_answer' => '0',
                'question_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ldapdelete は、LDAPサーバに登録されているデータを削除することができる',
                'correct_answer' => '0',
                'question_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => 'openldapd',
                'correct_answer' => '0',
                'question_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ldap_daemon',
                'correct_answer' => '0',
                'question_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'slapd',
                'correct_answer' => '1',
                'question_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'slapcat',
                'correct_answer' => '0',
                'question_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
