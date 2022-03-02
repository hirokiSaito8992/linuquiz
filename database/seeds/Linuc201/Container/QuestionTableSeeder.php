<?php

namespace Database\Seeds\Linuc201\Container;

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
                'name' => 'Dockerコマンドの説明のうち、正しいものを2つ選択せよ',
                'user_id' => '6',
                'category_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'ダウンロードしたDockerコンテナイメージを削除する方法として正しいものをふたつ選択してください',
                'user_id' => '7',
                'category_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'コンテナの特徴で正しいものはどれか 2つ選択せよ',
                'user_id' => '8',
                'category_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Linux名前空間の説明について誤っているものはどれか',
                'user_id' => '9',
                'category_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'コンテナのリソース制限について説明で誤っているものはどれか',
                'user_id' => '10',
                'category_id' => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
