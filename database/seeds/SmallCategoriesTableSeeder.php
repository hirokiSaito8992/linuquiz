<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmallCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('small_categories')->insert([
            'name' => 'ネットワーククライアントの管理',
            'large_categories_id' => '4'
        ]);
        DB::table('small_categories')->insert([
            'name' => 'ドメインネームサーバ',
            'large_categories_id' => '4'
        ]);
        DB::table('small_categories')->insert([
            'name' => 'HTTPサーバとプロキシサーバ',
            'large_categories_id' => '4'
        ]);
        DB::table('small_categories')->insert([
            'name' => '電子メールサービス',
            'large_categories_id' => '4'
        ]);
        DB::table('small_categories')->insert([
            'name' => 'ファイル共有サービス',
            'large_categories_id' => '4'
        ]);
        DB::table('small_categories')->insert([
            'name' => 'システムのセキュリティ',
            'large_categories_id' => '4'
        ]);
        DB::table('small_categories')->insert([
            'name' => 'システムアーキテクチャ',
            'large_categories_id' => '4'
        ]);
    }
}
