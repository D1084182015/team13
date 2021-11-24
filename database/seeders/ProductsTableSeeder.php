<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'transaction_date'=>'100/11/10',
            'product'=>'banana',
            'mid'=>'1',
            'high_price'=>'48.8',
            'midium_price'=>'38.8',
            'low_price'=>'26.8',
            'average_price'=>'38.4',
            'trading_volume'=>'15487'
        ]);
    }
}
