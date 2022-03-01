<?php

namespace Database\Seeds\Linuc202\SystemArchitecture;

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
                'name' => '用語の説明として正しくないものを一つ選択してください',
                'user_id' => '6',
                'category_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'データレプリケーションについて、正しいものを2つ選択せよ',
                'user_id' => '7',
                'category_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '可用性を評価する指標として、説明の正しいものを選択してください',
                'user_id' => '8',
                'category_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '以下のキャパシティプランニングに関する用語の説明のうち、正しいものを2つ選択せよ',
                'user_id' => '9',
                'category_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '以下のクラウドリソースに関する記載のうち、正しいものを2つ選択せよ',
                'user_id' => '10',
                'category_id' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
