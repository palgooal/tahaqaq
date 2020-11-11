<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name_ar'=>"الرئيسية",
            'name_en'=>"Home",
            'url'=>"/",
            'sort' =>"0",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"لماذا تحقق",
            'name_en'=>"Why Tahaqaq",
            'url'=>"#",
            'sort' =>"1",
        ]);

        DB::table('menus')->insert([
            'name_ar'=>"الخدمات",
            'name_en'=>"Services",
            'url'=>"#",
            'sort' =>"2",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"كيف نعمل",
            'name_en'=>"how do we work",
            'url'=>"/pages/kyf-naaml",
            'sort' =>"3",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"الاسعار",
            'name_en'=>"the prices",
            'url'=>"/pages/alasaaar",
            'sort' =>"4",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"المدونة",
            'name_en'=>"Blog",
            'url'=>"/blogs",
            'sort' =>"5",
        ]);

        DB::table('menus')->insert([
            'name_ar'=>"منتجاتنا",
            'name_en'=>"Templates",
            'url'=>"/template",
            'sort' =>"6",
        ]);


    }
}
