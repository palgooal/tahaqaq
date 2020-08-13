<?php

use App\Logic\SysVar\SysVarTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SysVarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //HEader section
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Header,
            'key'=>SysVarTypes::Type_Header_Key_Title,
            'value_en'=>"Your journey in the sites
            Electronic begins with a check",
            'value_ar' =>"رحلتك في المواقع
            الالكترونية تبدأ مع تحقق",
        ]);

        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Header,
            'key'=>SysVarTypes::Type_Header_Key_Details,

            'value_en'=>"It is used in the printing press and publishing industries. Lorem Ipsum was and still is the standard for formal blows
            Since the fifteenth century, when an unknown press created a group of letters in a shape
            I took it from text, as a booklet as a guide or formal reference for these letters. five",

            'value_ar' =>"وُيستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنصالشكلي
            منذ القرن الخامسعشر عندما قامت مطبعة مجهولة برصمجموعة من الأحرف بشكل
            عشوائي أخذتها من نص، لتك ّون كتّيب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة",
        ]);

        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Header,
            'key'=>SysVarTypes::Type_Header_Key_StartNowUrl,
            'value_en'=>"/",
            'value_ar' =>"/",
        ]);

        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Header,
            'key'=>SysVarTypes::Type_Header_Key_TryNowUrl,
            'value_en'=>"/",
            'value_ar' =>"/",
        ]);

        //Why Tahaqaq
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_WhyTahaqaq,
            'key'=>SysVarTypes::Type_WhyTahaqaq_Key_Title,
            'value_en'=>"How can we help you check",
            'value_ar' =>"!كيف يمكننا مساعدتك في تحقق",
        ]);

        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_WhyTahaqaq,
            'key'=>SysVarTypes::Type_WhyTahaqaq_Key_Details,
            'value_en'=> "It is the ability to implement and watch the final service from the client's project with the fewest tools and software work, which helps t
            Seeing something as the end result

            It is the latest science of software projects, to save time and effort, that allows the owner of any technical project idea, either
It was a service website, educational platform, or e-commerce business that helped him visualize the shape
The final presentation is presented to users from the Arab world and all over the world, who can evaluate and help support or modify an idea
The project",


            'value_ar' =>"هي القدرة على تنفيذ ومشاهدة الخدمة النهائية من مشروع العميل بأقل ادوات وعمل برمجي , مما يساعد على ر
            ؤية شيء من النتيجة النهائية

            وهو آخر ماتوصل اليه علم المشاريع البرمجية , لتوفير الوقت والجهد , يتيح لصاحب اي فكرة مشروع تقني سواء
كان موقع خدمات الكتروني او منصة تعليمية او تجارة الكترونية عمل نمو 1ج اولي يساعده في تخيل الشكل
النهائي وعرضه على مستخدمين من الوطن العربي والعالم كافة , يقيموا ويساعدوا في دعم او تعديل فكرة
المشروع",
        ]);



    }


}
