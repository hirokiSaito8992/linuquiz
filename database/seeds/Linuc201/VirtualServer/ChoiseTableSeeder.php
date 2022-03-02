<?php

namespace Database\Seeds\Linuc201\VirtualServer;

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
            //仮想サーバに関して問題1の選択肢
            [
                'choise' => 'WindowsやLinuxなどのOS上で仮想化ソフトを実行し、その上で仮想マシンを動作させる',
                'correct_answer' => '0',
                'question_id' => '54',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'LinuxやWindows等のOSを必要とせず、ハードウェア上で直接仮想化ソフトウェアを実行し、その上で仮想マシンを動作させる',
                'correct_answer' => '1',
                'question_id' => '54',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '基盤OSとカーネルを共有し、仮想環境上に新たにOSを使用せず、アプリケーションを動作させる',
                'correct_answer' => '0',
                'question_id' => '54',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '比較的オーバーヘッドが生じやすく、仮想マシンの動作速度が遅くなる',
                'correct_answer' => '0',
                'question_id' => '54',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            //問題2の選択肢
            [
                'choise' => 'vm-install',
                'correct_answer' => '0',
                'question_id' => '55',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'virt-install',
                'correct_answer' => '1',
                'question_id' => '55',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'kvm-install',
                'correct_answer' => '0',
                'question_id' => '55',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'virsh install',
                'correct_answer' => '0',
                'question_id' => '55',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => '準仮想化ゲストOSのI/Oは、完全仮想化ゲストOSのI/Oに比べてオーバヘッドが大きい',
                'correct_answer' => '1',
                'question_id' => '56',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'Xenの準仮想化では、ゲストOSはハイパーバイザーに対してハイパーバイザーコールを発行する',
                'correct_answer' => '0',
                'question_id' => '56',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '完全仮想化では物理マシン上で稼働するOSを改変することなく、そのままゲストOSとして稼働させることができる',
                'correct_answer' => '0',
                'question_id' => '56',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '完全仮想化を実現するKVMはLinuxの一部である',
                'correct_answer' => '0',
                'question_id' => '56',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'VMに対して管理用APIを提供する',
                'correct_answer' => '1',
                'question_id' => '57',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'リクエストをlibvirtdデーモンが受付、ハイパーバイザーに接続する',
                'correct_answer' => '1',
                'question_id' => '57',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'KVM Xenをサポートする',
                'correct_answer' => '1',
                'question_id' => '57',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'virt-managerはサポートしない',
                'correct_answer' => '0',
                'question_id' => '57',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => '-v',
                'correct_answer' => '1',
                'question_id' => '58',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '--hvm',
                'correct_answer' => '1',
                'question_id' => '58',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '--full',
                'correct_answer' => '0',
                'question_id' => '58',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => '-f',
                'correct_answer' => '0',
                'question_id' => '58',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
