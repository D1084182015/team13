<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MarketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomZone() {
        $zones = ['東部', '北部','中部','南部'];
        return $zones[rand(0, count($zones)-1)];
    }

    public function generateRandomMarket() {
        $markets = ['台北一', '台北二','板橋區','三重區','宜蘭市','台中市','鳳山區','嘉義市'];
        return $markets[rand(0, count($markets)-1)];
    }

    public function generateRandomaddress() {
        $address = ['萬大路1009號', '北港路251號','文中路107號','山西路316號','板城路1000號','中清路二段1303號'];
        return $address[rand(0, count($address)-1)];
    }




    public function run()
    {
        //
        for($i=0; $i<25; $i++){

            $market = $this->generateRandomMarket();
            $address = $this->generateRandomaddress();
            $zone = $this->generateRandomZone();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));



            DB::table('markets')->insert([
                'market' =>$market,
                'zone' =>$zone,
                'address'=>$address,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
