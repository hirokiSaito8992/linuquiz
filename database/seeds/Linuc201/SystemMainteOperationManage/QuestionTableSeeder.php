<?php

namespace Database\Seeds\Linuc201\SystemMainteOperationManage;

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
                'name' => 'AnsibleのPlaybookの説明として正しいもの選択してください',
                'user_id' => '6',
                'category_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Ansibleなどのシステム構成ツールを利用する際のメリットである冪等性（べきとうせい）に関する説明はどれか',
                'user_id' => '7',
                'category_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '物理メモリとスワップの合計を表示するコマンドとして正しいものを選択してください',
                'user_id' => '8',
                'category_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'files_oss-1.0.0.zip というソースコードを展開するコマンドとして正しいものを全て選択してください',
                'user_id' => '9',
                'category_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'ログイン後、ユーザに対して通知を実施したい。編集すべきファイルはどれか',
                'user_id' => '10',
                'category_id' => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],


        ]);
    }
}
