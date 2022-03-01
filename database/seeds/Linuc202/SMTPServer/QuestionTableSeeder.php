<?php

namespace Database\Seeds\Linuc202\SMTPServer;

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
                'name' => 'Postfixが受け取ったメールを、他のホストに転送せずにローカル配送する場合、配送するドメインを設定するパラメータを選択してください',
                'user_id' => '4',
                'category_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '
                    Dovecotで利用するプロトコルの設定をデフォルトから変更し、IMAPのみを利用するよう設定した。この設定が適用されているか確認するコマンドとして正しいものを全て選択してください
                ',
                'user_id' => '5',
                'category_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'PostfixでStartTLSを設定するパラメータとして、正しいものを2つ選択せよ',
                'user_id' => '6',
                'category_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'sshdサービスの自動起動を設定するコマンドを選択してください',
                'user_id' => '7',
                'category_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
