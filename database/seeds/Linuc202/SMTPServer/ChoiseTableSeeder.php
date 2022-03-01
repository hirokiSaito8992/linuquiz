<?php

namespace Database\Seeds\Linuc202\SMTPServer;

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
            //SMTPに関して問題1の選択肢
            [
                'choise' => 'myhost',
                'correct_answer' => '0',
                'question_id' => '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'mydestination',
                'correct_answer' => '1',
                'question_id' => '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'local_domain',
                'correct_answer' => '0',
                'question_id' => '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'mydomain',
                'correct_answer' => '0',
                'question_id' => '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            //問題2の選択肢
            [
                'choise' => 'doveconf -d',
                'correct_answer' => '0',
                'question_id' => '16',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'doveconf -n protocols',
                'correct_answer' => '1',
                'question_id' => '16',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'doveconf -d protocols',
                'correct_answer' => '0',
                'question_id' => '16',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'doveconf -a',
                'correct_answer' => '1',
                'question_id' => '16',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'smtpd_tls_security_level = may',
                'correct_answer' => '1',
                'question_id' => '17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'smtpd_tls_security_level = secure',
                'correct_answer' => '0',
                'question_id' => '17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'smtpd_use_tls = yes',
                'correct_answer' => '1',
                'question_id' => '17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'smtpd_use_tls = no',
                'correct_answer' => '0',
                'question_id' => '17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'systemctl enable sshd.service',
                'correct_answer' => '1',
                'question_id' => '18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl start sshd.service',
                'correct_answer' => '0',
                'question_id' => '18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl sshd on',
                'correct_answer' => '0',
                'question_id' => '18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl is-enabled sshd.service',
                'correct_answer' => '0',
                'question_id' => '18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
