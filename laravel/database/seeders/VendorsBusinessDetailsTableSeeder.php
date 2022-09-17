<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBusinessDetail;

class VendorsBusinessDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorRecords = [
        	['id'=>1,'vendor_id'=>1,'shop_name'=>'John Electronics','shop_address'=>'1234', 'shop_mobile'=>'011234532','shop_email'=>'johnelectro@gmail.com'],
        ];
        VendorsBusinessDetail::insert($vendorRecords);

    }
}
