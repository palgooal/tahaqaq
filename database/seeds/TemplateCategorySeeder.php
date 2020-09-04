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
            'code' =>"Personal Template",
            'text_ar'=>"موقع تعريفي",
            'text_en'=>"Personal Template",
        ]);
        DB::table('template_categories')->insert([
            'code' =>"Course Template",
            'text_ar'=>"مواقع دورات تدريبية",
            'text_en'=>"Training course Template",
        ]);
        DB::table('template_categories')->insert([
            'code' =>"Consulting Templates",
            'text_ar'=>"مواقع استشارات",
            'text_en'=>"Consulting Templates",
        ]);
        DB::table('template_categories')->insert([
            'code' =>"Ecommerce Templates",
            'text_ar'=>"قوالب متاجر الالكترونية",
            'text_en'=>"Ecommerce templates",
        ]);
        DB::table('template_categories')->insert([
            'code' =>"Company introductory Templates",
            'text_ar'=>"قوالب شركات تعريفي",
            'text_en'=>"Company templates",
        ]);
    }
}
