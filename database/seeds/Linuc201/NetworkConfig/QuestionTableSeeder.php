<?php

namespace Database\Seeds\Linuc201\NetworkConfig;

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
                'name' => 'ネットワークインタフェースのデバイス名を表示するipコマンドを2つ選択してください',
                'user_id' => '1',
                'category_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '
                以下の空欄に当てはまる、nmcliツールを対話的な接続エディタとして使用するための正しい内容を選択してください
                # nmcli con <    > ens192
                ',
                'user_id' => '2',
                'category_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'LinuxをIPv4のルータとして使用するための設定として誤っているものを選択してください',
                'user_id' => '3',
                'category_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '以下のコマンドのうち、ルーティング情報を参照できるものを3つ選択せよ',
                'user_id' => '4',
                'category_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '以下のコマンドのうち、解放されているポートの一覧を確認できるコマンドを全て選択せよ',
                'user_id' => '5',
                'category_id' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
