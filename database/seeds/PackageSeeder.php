<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            'name_package'=>"الباقة البرونزية",
            'price'=>"423",
            'Details'=>"/",
            'link' =>"#",
        ]);
        DB::table('packages')->insert([
            'name_package'=>"الباقة الفضية",
            'price'=>"1102",
            'Details'=>"/",
            'link' =>"#",
        ]);
        DB::table('packages')->insert([
            'name_package'=>"الباقة الذهبية",
            'price'=>"2500",
            'Details'=>"/",
            'link' =>"#",
        ]);
    }
}
