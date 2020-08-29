<?php

use Illuminate\Database\Seeder;

class TemplateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('template_categories')->insert([
            'text_ar'=>"تصنيف1",
            'text_en'=>"category1",

        ]);
        DB::table('template_categories')->insert([
            'text_ar'=>"تصنيف2",
            'text_en'=>"category2",

        ]);
    }
}
