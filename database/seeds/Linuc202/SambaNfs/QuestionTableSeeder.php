<?php

namespace Database\Seeds\Linuc202\SambaNfs;

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
                'name' => 'sambaの設定ファイルの構文が正しいか確認することのできるコマンドを一つ選択してください',
                'user_id' => '8',
                'category_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'smbd, nmbd, winbinddの役割として間違っているものはどれか',
                'user_id' => '9',
                'category_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Sambaを構成するプロセスを3つ選択',
                'user_id' => '10',
                'category_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Sambaサーバが自分のTDBによりユーザ認証するためのsmb.confの設定はどれか',
                'user_id' => '3',
                'category_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '
                    Sambaで/etc/passwdと/etc/shadowを用いて、ユーザ認証のため設定するsmb.confパラメータはどれか
                ',
                'user_id' => '4',
                'category_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],


        ]);
    }
}
