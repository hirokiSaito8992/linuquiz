<?php

namespace Database\Seeds\Linuc201\NetworkConfig;

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
            //ネットワーク構成に関して問題1の選択肢
            [
                'choise' => 'ip show',
                'correct_answer' => '0',
                'question_id' => '44',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ip address help',
                'correct_answer' => '0',
                'question_id' => '44',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ip link show',
                'correct_answer' => '1',
                'question_id' => '44',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ip address list',
                'correct_answer' => '1',
                'question_id' => '44',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            //問題2の選択肢
            [
                'choise' => 'modify',
                'correct_answer' => '0',
                'question_id' => '45',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'edit',
                'correct_answer' => '1',
                'question_id' => '45',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'set',
                'correct_answer' => '0',
                'question_id' => '45',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'monitor',
                'correct_answer' => '0',
                'question_id' => '45',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'echo 1 > /proc/sys/net/ipv4/ip_forward を実行する',
                'correct_answer' => '0',
                'question_id' => '46',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ip router on を実行する',
                'correct_answer' => '1',
                'question_id' => '46',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'sysctl net.ipv4.ip_forward=1 を実行する',
                'correct_answer' => '0',
                'question_id' => '46',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '/etc/sysctl.conf に net.ipv4.ip_forward=1 を記載し、sysctl -p を実行する',
                'correct_answer' => '0',
                'question_id' => '46',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'ip',
                'correct_answer' => '1',
                'question_id' => '47',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ifconfig',
                'correct_answer' => '0',
                'question_id' => '47',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'route',
                'correct_answer' => '1',
                'question_id' => '47',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'netstat',
                'correct_answer' => '1',
                'question_id' => '47',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => 'ss',
                'correct_answer' => '1',
                'question_id' => '48',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'netstat',
                'correct_answer' => '1',
                'question_id' => '48',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ping',
                'correct_answer' => '0',
                'question_id' => '48',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'traceroute',
                'correct_answer' => '0',
                'question_id' => '48',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
