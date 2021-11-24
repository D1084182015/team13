<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('markets')->insert([
            'market' =>'桃園',
            'zone' =>'北區',
            'address'=>'000號'
            ]);
    }
}
