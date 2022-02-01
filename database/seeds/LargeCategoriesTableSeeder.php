<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LargeCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('large_categories')->insert([
            'name' => 'Linuc101',
        ]);
        DB::table('large_categories')->insert([
            'name' => 'Linuc102',
        ]);

        DB::table('large_categories')->insert([
            'name' => 'Linuc201',
        ]);
        DB::table('large_categories')->insert([
            'name' => 'Linuc202',
        ]);
    }
}
