<?php

namespace Database\Seeds\Linuc202\SambaNfs;

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
            //Sambaに関して問題1の選択肢
            [
                'choise' => 'smbcontrol all check-config',
                'correct_answer' => '0',
                'question_id' => '19',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'smbstatus',
                'correct_answer' => '0',
                'question_id' => '19',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'testparm',
                'correct_answer' => '1',
                'question_id' => '19',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'smbclient',
                'correct_answer' => '0',
                'question_id' => '19',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題2の選択肢
            [
                'choise' => 'smbdは、Windows クライアントにファイル共有と印刷サービスを提供するサーバーデーモンである',
                'correct_answer' => '0',
                'question_id' => '20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'nmbdは、Windowsクライアントなどの SMB/CIFS クライアントによるNetBIOS over TCP/IP のネームサービスのリクエストを認識し、 応答することができるサーバーである',
                'correct_answer' => '0',
                'question_id' => '20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'winbinddは、NSS (ネームサービススイッチ) 機能を提供する',
                'correct_answer' => '0',
                'question_id' => '20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'nmdbでは、137/tdp・138/tdpが使われる',
                'correct_answer' => '1',
                'question_id' => '20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'smtp',
                'correct_answer' => '0',
                'question_id' => '21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'smbd',
                'correct_answer' => '1',
                'question_id' => '21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'nmbd',
                'correct_answer' => '1',
                'question_id' => '21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'winbindd',
                'correct_answer' => '1',
                'question_id' => '21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => '
                    security = user
                    passdb backend = tdbsam
                ',
                'correct_answer' => '1',
                'question_id' => '22',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '
                    security = user
                    passdb backend = smbpasswd
                ',
                'correct_answer' => '0',
                'question_id' => '22',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'security = server',
                'correct_answer' => '0',
                'question_id' => '22',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '
                    security = user
                    passdb backend ldapsam
                ',
                'correct_answer' => '0',
                'question_id' => '22',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => 'security = user',
                'correct_answer' => '0',
                'question_id' => '23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'security = domain',
                'correct_answer' => '0',
                'question_id' => '23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '/etc/shadowをsmbpasswdへシンボリックリンクして認証する',
                'correct_answer' => '0',
                'question_id' => '23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '/etc/passwdとetc/shadowではユーザ認証を行えない',
                'correct_answer' => '1',
                'question_id' => '23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
