<?php

namespace Database\Seeds\Linuc201\SystemBootLinuxKernel;

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
            //Linuxカーネルに関して問題1の選択肢
            [
                'choise' => 'systemctl enable nginx',
                'correct_answer' => '1',
                'question_id' => '34',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl enabled nginx',
                'correct_answer' => '0',
                'question_id' => '34',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl is-enabled nginx',
                'correct_answer' => '1',
                'question_id' => '34',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl status nginx',
                'correct_answer' => '0',
                'question_id' => '34',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題2の選択肢
            [
                'choise' => 'grub-mkconfig -o /boot/grub/grub.cfg',
                'correct_answer' => '1',
                'question_id' => '35',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'grub-mkconfig /etc/default/grub -o /boot/grub/grub.cfg',
                'correct_answer' => '0',
                'question_id' => '35',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'grub-mkconfig -o /etc/default/grub /boot/grub/grub.cfg',
                'correct_answer' => '0',
                'question_id' => '35',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'grub-mkconfig -v /boot/grub/grub.cfg',
                'correct_answer' => '0',
                'question_id' => '35',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'systemctl status all',
                'correct_answer' => '0',
                'question_id' => '36',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl status service',
                'correct_answer' => '0',
                'question_id' => '36',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl list-unit-files -t service',
                'correct_answer' => '0',
                'question_id' => '36',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl list-units -t service',
                'correct_answer' => '1',
                'question_id' => '36',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'hostname',
                'correct_answer' => '0',
                'question_id' => '37',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'uname -r',
                'correct_answer' => '1',
                'question_id' => '37',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'cat /etc/profile',
                'correct_answer' => '0',
                'question_id' => '37',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'cat /proc/version',
                'correct_answer' => '1',
                'question_id' => '37',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => 'remove qede',
                'correct_answer' => '0',
                'question_id' => '38',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'blacklist qede',
                'correct_answer' => '1',
                'question_id' => '38',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'options qede',
                'correct_answer' => '0',
                'question_id' => '38',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'install qede',
                'correct_answer' => '0',
                'question_id' => '38',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
