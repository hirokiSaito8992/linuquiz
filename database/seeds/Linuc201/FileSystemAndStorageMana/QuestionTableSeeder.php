<?php

namespace Database\Seeds\Linuc201\FileSystemAndStorageMana;

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
                'name' => 'lvm.confにおいて、シェル履歴の最大行数を指定するパラメータはどれか',
                'user_id' => '6',
                'category_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'ext4に関連する説明について誤っているものを選択してください',
                'user_id' => '7',
                'category_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '論理ボリュームのサイズを拡張するコマンドを以下から選択しなさい',
                'user_id' => '8',
                'category_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'スワップ領域を作成し、有効化するために実行するコマンドの順として正しいものを選択せよ',
                'user_id' => '9',
                'category_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'systemdを採用しているシステムで、システムに緊急モードに切り替えるためのコマンドを一つ選択してください',
                'user_id' => '10',
                'category_id' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
