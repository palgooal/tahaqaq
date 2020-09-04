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
        //settings
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Setting,
            'key'=>SysVarTypes::Type_Setting_Key_LoginActionUrl,
            'value_en'=>"https://clientgooal.palgooal.com/dologin.php",
            'value_ar' =>"https://clientgooal.palgooal.com/dologin.php",
        ]);


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
            'value_en'=>"/TahqqRegistration",
            'value_ar' =>"/TahqqRegistration",
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
            'value_en'=>"Why Tahaqaq",
            'value_ar' =>"لماذا تحقق",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_WhyTahaqaq,
            'key'=>SysVarTypes::Type_WhyTahaqaq_Key_SubTitle,
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


        //Tahaqaq info1
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo1,
            'key'=>SysVarTypes::Type_TahaqaqInfo1_Key_Title,
            'value_en'=>"Store management",
            'value_ar' =>"إدارة المتجر",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo1,
            'key'=>SysVarTypes::Type_TahaqaqInfo1_Key_Details,
            'value_en'=>"",
            'value_ar' =>"تيح لك خدمات تحقق الادارة السهلة لمنتجاتك
            ابتداء من ادراجها في المتجر وانتهاء بادارتها
            .وتسويقها",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo1,
            'key'=>SysVarTypes::Type_TahaqaqInfo1_Key_URL,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);

        //Tahaqaq info2
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo2,
            'key'=>SysVarTypes::Type_TahaqaqInfo2_Key_Title,
            'value_en'=>"Payment Method",
            'value_ar' =>"وسائل الدفع",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo2,
            'key'=>SysVarTypes::Type_TahaqaqInfo2_Key_Details,
            'value_en'=>"",
            'value_ar' =>"تيح لك خدمات تحقق الادارة السهلة لمنتجاتك
            ابتداء من ادراجها في المتجر وانتهاء بادارتها
            .وتسويقها",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo2,
            'key'=>SysVarTypes::Type_TahaqaqInfo2_Key_URL,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);
        //Tahaqaq info3
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo3,
            'key'=>SysVarTypes::Type_TahaqaqInfo3_Key_Title,
            'value_en'=>"Professional designs",
            'value_ar' =>"تصاميم احترافية",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo3,
            'key'=>SysVarTypes::Type_TahaqaqInfo3_Key_Details,
            'value_en'=>"",
            'value_ar' =>"تيح لك خدمات تحقق الادارة السهلة لمنتجاتك
            ابتداء من ادراجها في المتجر وانتهاء بادارتها
            .وتسويقها",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo3,
            'key'=>SysVarTypes::Type_TahaqaqInfo3_Key_URL,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);


        //Tahaqaq info4
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo4,
            'key'=>SysVarTypes::Type_TahaqaqInfo4_Key_Title,
            'value_en'=>"Advanced reports",
            'value_ar' =>"تقارير متقدمة",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo4,
            'key'=>SysVarTypes::Type_TahaqaqInfo4_Key_Details,
            'value_en'=>"",
            'value_ar' =>"تيح لك خدمات تحقق الادارة السهلة لمنتجاتك
            ابتداء من ادراجها في المتجر وانتهاء بادارتها
            .وتسويقها",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_TahaqaqInfo4,
            'key'=>SysVarTypes::Type_TahaqaqInfo4_Key_URL,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);



        //Footer section
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Footer,
            'key'=>SysVarTypes::Type_Footer_Key_Subscription,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Footer,
            'key'=>SysVarTypes::Type_Footer_Key_Pricing,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);

        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Footer,
            'key'=>SysVarTypes::Type_Footer_Key_Blog,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);


        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Footer,
            'key'=>SysVarTypes::Type_Footer_Key_About,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Footer,
            'key'=>SysVarTypes::Type_Footer_Key_PrivacyPolicy,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);

        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Footer,
            'key'=>SysVarTypes::Type_Footer_Key_HowDoWeWork,
            'value_en'=>"http:\\",
            'value_ar' =>"كيف نعمل",
        ]);

        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Footer,
            'key'=>SysVarTypes::Type_Footer_Key_Contact,
            'value_en'=>"/Contactus",
            'value_ar' =>"/Contactus",
        ]);

        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_Footer,
            'key'=>SysVarTypes::Type_Footer_Key_Services,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);


        //Social media
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_SocialMedia,
            'key'=>SysVarTypes::Type_SocialMedia_Facbook,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_SocialMedia,
            'key'=>SysVarTypes::Type_SocialMedia_Twitter,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_SocialMedia,
            'key'=>SysVarTypes::Type_SocialMedia_Instagram,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);
        DB::table('sys_vars')->insert([
            'type'=> SysVarTypes::Type_SocialMedia,
            'key'=>SysVarTypes::Type_SocialMedia_Youtube,
            'value_en'=>"http:\\",
            'value_ar' =>"http:\\",
        ]);
    }


}
