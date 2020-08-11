<?php

use Illuminate\Database\Seeder;

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
            'url'=>"#",
            'sort' =>"3",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"الاسعار",
            'name_en'=>"the prices",
            'url'=>"#",
            'sort' =>"4",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"المدونة",
            'name_en'=>"Blog",
            'url'=>"#",
            'sort' =>"5",
        ]);
    }
}
