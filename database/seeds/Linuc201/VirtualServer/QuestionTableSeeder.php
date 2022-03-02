<?php

namespace Database\Seeds\Linuc201\VirtualServer;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'name' => '以下の文のうち、ハイパーバイザー型の仮想化の説明として正しい文をすべて選択してください',
                'user_id' => '1',
                'category_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '
                    KVMを用いて仮想マシンを作成し、仮想マシン内にゲストOSをインストールします。
                    仮想マシンの作成ならびにゲストOSのインストールを行うコマンドを選んでください
                ',
                'user_id' => '2',
                'category_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'OSの仮想化の説明で誤っているのはどれか',
                'user_id' => '3',
                'category_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'libvirtについての説明で正しいものはどれか?3つ選択してください',
                'user_id' => '4',
                'category_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'virt-installで完全仮想化とするオプションはどれか 2つ選択せよ',
                'user_id' => '5',
                'category_id' => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
