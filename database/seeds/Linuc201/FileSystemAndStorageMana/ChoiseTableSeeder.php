<?php

namespace Database\Seeds\Linuc201\FileSystemAndStorageMana;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChoiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choises')->insert([
            //ファイルシステムとストレージに関して問題1の選択肢
            [
                'choise' => 'history',
                'correct_answer' => '0',
                'question_id' => '39',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'pvmetadatasize',
                'correct_answer' => '0',
                'question_id' => '39',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'pv_min_size',
                'correct_answer' => '0',
                'question_id' => '39',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'history_size',
                'correct_answer' => '1',
                'question_id' => '39',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題2の選択肢
            [
                'choise' => 'ext4はファイルシステムのサイズを後から拡大できる',
                'correct_answer' => '0',
                'question_id' => '40',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ext4はファイルシステムのサイズを後から縮小できる',
                'correct_answer' => '0',
                'question_id' => '40',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'xfs_infoコマンドは、ext4ファイルシステムの詳細情報を表示するコマンドである',
                'correct_answer' => '1',
                'question_id' => '40',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'ext4はext3の下位互換があるため、ext3としてマウントすることも可能である',
                'correct_answer' => '0',
                'question_id' => '40',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題3の選択肢
            [
                'choise' => 'xfs_growfs',
                'correct_answer' => '0',
                'question_id' => '41',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'lvextend',
                'correct_answer' => '1',
                'question_id' => '41',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'pvcreate',
                'correct_answer' => '0',
                'question_id' => '41',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'resize2fs',
                'correct_answer' => '0',
                'question_id' => '41',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題4の選択肢
            [
                'choise' => 'dd・chmod・mkswap・swapon',
                'correct_answer' => '1',
                'question_id' => '42',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'dd・chmod・swapon・mkswap',
                'correct_answer' => '0',
                'question_id' => '42',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'dd・chmod・mkswap・swapoff',
                'correct_answer' => '0',
                'question_id' => '42',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'dd・chmod・swapoff・mkswap',
                'correct_answer' => '0',
                'question_id' => '42',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //問題5の選択肢
            [
                'choise' => 'systemctl emergency',
                'correct_answer' => '1',
                'question_id' => '43',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl rescue',
                'correct_answer' => '0',
                'question_id' => '43',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'init 1',
                'correct_answer' => '0',
                'question_id' => '43',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'choise' => 'systemctl get-default',
                'correct_answer' => '0',
                'question_id' => '43',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
