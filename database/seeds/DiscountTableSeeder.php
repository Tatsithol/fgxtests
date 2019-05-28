<?php

use Illuminate\Database\Seeder;

class DiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //@tatsithol seeding database with reasons for dicount
        // important when uploading product
        DB::table('discount')->insert([
            'reason_id' => '1',
            'reason' => 'Increase traffic'
        ]);

        DB::table('discount')->insert([
            'reason_id' => '2',
            'reason' => 'Increase Sales'
        ]);
        DB::table('discount')->insert([
            'reason_id' => '3',
            'reason' => 'Sales targets'
        ]);
        DB::table('discount')->insert([
            'reason_id' => '4',
            'reason' => 'Stronger Client Relationships'
        ]);
        DB::table('discount')->insert([
            'reason_id' => '5',
            'reason' => 'Monetize Inventory'
        ]);
        DB::table('discount')->insert([
            'reason_id' => '6',
            'reason' => 'Clearance Sale'
        ]);
    }
}
