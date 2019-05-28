<?php

use Illuminate\Database\Seeder;

class Discount_statusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('discount_status')->insert([
            'dstatus_id' => '1',
            'price_min' => '50',
            'price_max' => '100',
            'percentage' => '0',
        ]);

        DB::table('discount_status')->insert([
            'dstatus_id' => '2',
            'price_min' => '112',
            'price_max' => '150',
            'percentage' => '25',
        ]);

        DB::table('discount_status')->insert([
            'dstatus_id' => '3',
            'price_min' => '200',
            'price_max' => '100',
            'percentage' => '50',
        ]);

        
    }
}
