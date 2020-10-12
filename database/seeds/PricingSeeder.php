<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert([
            'name_package'=>"الباقة البرونزية",
            'price'=>"423",
            'Details'=>'<li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">مساحة القرص 500 MB</li>
        <li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">معدل نقل البيانات 50 GB</li>
        <li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">البريد الإلكتروني غير محدود</li>
        <li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">النسخ الاحتياطي</li>
        <li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">24/7 الدعم الفني</li>',
            'link' =>"#",
        ]);
        DB::table('pricings')->insert([
            'name_package'=>"الباقة الفضية",
            'price'=>"1102",
            'Details'=>'<li class="set-color text-white">
            <img src="img/shape-star.png" class="float-right ml-3">مساحة القرص 500 MB</li>
        <li class="set-color text-white">
            <img src="img/shape-star.png" class="float-right ml-3">معدل نقل البيانات 50 GB</li>
        <li class="set-color text-white">
            <img src="img/shape-star.png" class="float-right ml-3">البريد الإلكتروني غير محدود</li>
        <li class="set-color text-white">
            <img src="img/shape-star.png" class="float-right ml-3">النسخ الاحتياطي</li>
        <li class="set-color text-white">
            <img src="img/shape-star.png" class="float-right ml-3">24/7 الدعم الفني</li>',
            'link' =>"#",
        ]);
        DB::table('pricings')->insert([
            'name_package'=>"الباقة الذهبية",
            'price'=>"2500",
            'Details'=>'<li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">مساحة القرص 500 MB</li>
        <li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">معدل نقل البيانات 50 GB</li>
        <li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">البريد الإلكتروني غير محدود</li>
        <li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">النسخ الاحتياطي</li>
        <li class="set-color">
            <img src="img/shape-star.png" class="float-right ml-3">24/7 الدعم الفني</li>',
            'link' =>"#",
        ]);
    }
}
