<?php

use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
            'name'=>"قالب موقع تعريفي",
            'title_ar'=>"قالب احترافي لتعريف عن الشركات",
            'title_en'=>"Professional template for company introduction",
            'small_details_ar' =>"قالب احترافي لتعريف عن الشركات",
            'small_details_en'=>"Professional template for company introduction",
            'details_ar'=>'<p dir="rtl" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(66, 66, 66); font-family: tahoma, sans-serif; font-size: 14px; text-align: start;">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...</p><div><br></div>',
            'details_en'=>"Lorem Ipsum is a hypothetical model placed in designs to be presented to the client to visualize the way texts are placed in designs, whether they are printed designs ... brochures or flyers, for example ... or website templates ...",
            'category_id'=>"1",
            'image_url'=>"images/sb-admin-pro-html.jpg",
            'preview_url'=>"#",
            'whmcs_gid'=>"1",
            'whmcs_gould_pid'=>"6",
            'whmcs_silver_pid'=>"5",
            'whmcs_bronze_pid'=>"4",

        ]);
        DB::table('templates')->insert([
            'name'=>"قالب موقع دورات تدريبية",
            'title_ar'=>"قالب تدريبي 1",
            'title_en'=>"Training Template 1",
            'small_details_ar' =>"سمة مشرف Bootstrap مميزة",
            'small_details_en'=>"A premium Bootstrap admin theme",
            'details_ar'=>'<p dir="rtl" style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(66, 66, 66); font-family: tahoma, sans-serif; font-size: 14px; text-align: start;">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...</p><div><br></div>',
            'details_en'=>"Lorem Ipsum is a hypothetical model placed in designs to be presented to the client to visualize the way texts are placed in designs, whether they are printed designs ... brochures or flyers, for example ... or website templates ...",
            'category_id'=>"2",
            'image_url'=>"images/sb-admin-pro-html.jpg",
            'preview_url'=>"#",
            'whmcs_gid'=>"2",
            'whmcs_gould_pid'=>"3",
            'whmcs_silver_pid'=>"2",
            'whmcs_bronze_pid'=>"7",

        ]);
    }
}
