<?php

namespace Database\Seeds\Linuc202\DNS;

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
                'name' => '以下のうち、電子署名の仕組みを用いて、DNSクライアントがDNSサーバから送られてくるDNS情報が改竄されていないことを検証するものはどれか',
                'user_id' => '4',
                'category_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '自ホスト(127.0.0.1)内のDNSサーバを使ってIPアドレス「192.168.0.2」のホスト名を調べたい。正しいコマンドを全て選択してください',
                'user_id' => '5',
                'category_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '
                    DNSサーバであるBINDのバージョン9で、ゾーンファイルを編集した後、namedプロセスの停止や設定ファイルの再読み込みを行わず、ゾーンファイルだけを再読み込みするコマンドは次のうちどれですか
                ',
                'user_id' => '6',
                'category_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'named-compilezoneの機能として、正しいものを選択せよ',
                'user_id' => '7',
                'category_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => '/etc/named.confのloggingステートメントにおいて設定するパラメータ名を、全て選択せよ',
                'user_id' => '8',
                'category_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
