<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'text_ar'=>"موقع تعريفي",
            'text_en'=>"Introductory site",
        ]);
        DB::table('template_categories')->insert([
            'text_ar'=>"مواقع دورات تدريبية",
            'text_en'=>"Training course sites",
        ]);
        DB::table('template_categories')->insert([
            'text_ar'=>"مواقع استشارات",
            'text_en'=>"Templates Consulting",
        ]);
        DB::table('template_categories')->insert([
            'text_ar'=>"قوالب متاجر الالكترونية",
            'text_en'=>"Electronic store templates",
        ]);
        DB::table('template_categories')->insert([
            'text_ar'=>"قوالب شركات تعريفي",
            'text_en'=>"Company introductory templates",
        ]);
    }
}
