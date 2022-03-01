<?php

namespace Database\Seeds\Linuc202\NwClientMana;

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
                'name' => '以下のdhcpdの設定のうち、MACアドレス "0a:1b:2c:3d:4e:5f"を持つクライアントに10.10.10.100/24のIPアドレスを付与する設定を選択せよ',
                'user_id' => '1',
                'category_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'radvdについて、正しいものを2つ選択せよ',
                'user_id' => '2',
                'category_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '以下のうち、パスワードの強度チェックのために使用されるPAMモジュールはどれか',
                'user_id' => '2',
                'category_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'LDAPサーバに接続するためのLDAPユーティリティの説明のうち、誤っているものを1つ選択してください',
                'user_id' => '3',
                'category_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'OpenLDAPのLDAPディレクトリサーバとして正しいプログラムを選択してください',
                'user_id' => '2',
                'category_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
