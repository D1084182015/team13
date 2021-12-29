<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function generateRandomproduct() {
        $products = ['香蕉', '蘋果','釋迦','巨峰葡萄'];
        return $products[rand(0, count($products)-1)];
    }




    public function run()
    {
        //
       for ($i=0;$i<500;$i++)
       {
           $transaction_date = Carbon::now()->subYears(rand(0, 2))->subMonths(rand(0, 12))->subRealDays(rand(0,31));
           $product = $this->generateRandomproduct();
           $random_datetime = Carbon::now()->subMinutes(rand(1, 55));


           DB::table('products')->insert([
               'transaction_date'=>$transaction_date,
               'product'=>$product,
               'mid'=>rand(1,8),
               'high_price'=>rand(67,98),
               'midium_price'=>rand(32,75),
               'low_price'=>rand(10,30),
               'average_price'=>rand(50,70),
               'trading_volume'=>rand(1635,19453),
               'created_at' => $random_datetime,
               'updated_at' => $random_datetime
           ]);
       }
    }
}
