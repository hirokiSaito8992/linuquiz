<?php

namespace Database\Seeds\Linuc202\SystemSecurity;

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
                'name' => 'OpenVASやOpenSCAPについて、合っているものを2つ選択せよ',
                'user_id' => '9',
                'category_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'デフォルトゾーンの現在のパケットフィルタリング設定を確認するコマンドで正しいものを一つ選択してください',
                'user_id' => '10',
                'category_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '
                    firewalldでゾーン"management"を作成して、新しく追加したインタフェースenp0s8を所属させたい
                    この際、正しい選択肢を以下から2つ選択してください
                ',
                'user_id' => '2',
                'category_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '/etc/ssh/sshd_configの設定について、誤っている説明をひとつ選択してください',
                'user_id' => '1',
                'category_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '進入検知システム（IDS）の一つであるfail2banについての説明として、誤っているものを選択してください',
                'user_id' => '5',
                'category_id' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],


        ]);
    }
}
