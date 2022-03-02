<?php

namespace Database\Seeds\Linuc201\SystemBootLinuxKernel;

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
                'name' => '
                    OS起動時にプロセスnginxを自動起動するようにしたい
                    また、併せて自動起動されたか確認も行いたい。使用するコマンドを2つ選択せよ
                ',
                'user_id' => '1',
                'category_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '/etc/default/grubからGRUBの設定ファイルを生成するコマンドはどれか',
                'user_id' => '2',
                'category_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '起動中のサービスのみを一覧表示できるコマンドを一つ選択してください',
                'user_id' => '3',
                'category_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'カーネルバージョンを確認することのできるコマンドを全て選択してください',
                'user_id' => '4',
                'category_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '
                    /etc/modprobe.d/配下のkernel.confにおいて、qedeというモジュールをブートプロセス中に読み込まないようにしたい
                    以下のどれを記述すればよいか、選択せよ
                ',
                'user_id' => '5',
                'category_id' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
