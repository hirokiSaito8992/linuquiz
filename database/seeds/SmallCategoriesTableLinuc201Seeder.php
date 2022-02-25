<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmallCategoriesTableLinuc201Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('small_categories')->insert([
            'name' => 'システムの起動とLinuxカーネル',
            'large_categories_id' => '3'
        ]);
        DB::table('small_categories')->insert([
            'name' => 'ファイルシステムとストレージ管理',
            'large_categories_id' => '3'
        ]);
        DB::table('small_categories')->insert([
            'name' => 'ネットワーク構成',
            'large_categories_id' => '3'
        ]);
        DB::table('small_categories')->insert([
            'name' => 'システムの保守と運用管理',
            'large_categories_id' => '3'
        ]);
        DB::table('small_categories')->insert([
            'name' => '仮想サーバ',
            'large_categories_id' => '3'
        ]);
        DB::table('small_categories')->insert([
            'name' => 'コンテナ',
            'large_categories_id' => '3'
        ]);
    }
}
