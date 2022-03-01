<?php

namespace Database\Seeds\Linuc202\HttpProxy;

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
                'name' => 'Apacheの設定(httpd.conf)において、アクセスログの設定を行うディレクティブはどれか',
                'user_id' => '9',
                'category_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'nginxの説明について、誤っているものを一つ選択してください',
                'user_id' => '10',
                'category_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Apacheのセキュリティレベルを向上させる設定として正しいものを選択してください',
                'user_id' => '1',
                'category_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'nginxの設定において、1つのプロセスが処理できる最大コネクション数を指定するディレクティブはどれか',
                'user_id' => '3',
                'category_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
