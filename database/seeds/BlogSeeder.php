<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'Title_ar'=>'بلوق 1',
            'Title_en'=>'blog 1',
            'Body_ar'=>'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص،
             لتكوّن كتيّب بمثابة دليل أو مرجع شكلي
             لهذه الأحرف. خمسة قرون من الزمن لم
             تقضي على هذا النص، بل انه حتى صار
             مستخدماً وبشكله الأصلي في الطباعة
            والتنضيد الإلكتروني. انتشر
            بشكل كبير في ستينيّات هذا
            القرن مع إصدار
            رقائق "ليتراسيت" (Letraset) البلاستيكية تحوي
            مقاطع من هذا النص، وعاد لينتشر
             مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل "ألدوس بايج مايكر"
              (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم. ',
              'Body_en'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
               aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
               voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
               occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum.',
               'image'=>'images/12.png',
               'slug'=>'bloger11',
               'Tags'=>'{1},{2},{3}',
               'pin_to_slider'=>'0',
               'created_at' => '2020-09-06 00:00:00.000000'


        ]);
        DB::table('blogs')->insert([
            'Title_ar'=>'بلوق 12',
            'Title_en'=>'blog 12',
            'Body_ar'=>'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص،
             لتكوّن كتيّب بمثابة دليل أو مرجع شكلي
             لهذه الأحرف. خمسة قرون من الزمن لم
             تقضي على هذا النص، بل انه حتى صار
             مستخدماً وبشكله الأصلي في الطباعة
            والتنضيد الإلكتروني. انتشر
            بشكل كبير في ستينيّات هذا
            القرن مع إصدار
            رقائق "ليتراسيت" (Letraset) البلاستيكية تحوي
            مقاطع من هذا النص، وعاد لينتشر
             مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل "ألدوس بايج مايكر"
              (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم. ',
              'Body_en'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
               aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
               voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
               occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum.',
               'image'=>'images/12.png',
               'slug'=>'bloger221',
               'Tags'=>'{1},{2},{3}',
               'pin_to_slider'=>'1',
               'created_at' => '2020-09-06 00:00:00.000000'


        ]);
        DB::table('blogs')->insert([
            'Title_ar'=>'بلوق 12',
            'Title_en'=>'blog 12',
            'Body_ar'=>'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص،
             لتكوّن كتيّب بمثابة دليل أو مرجع شكلي
             لهذه الأحرف. خمسة قرون من الزمن لم
             تقضي على هذا النص، بل انه حتى صار
             مستخدماً وبشكله الأصلي في الطباعة
            والتنضيد الإلكتروني. انتشر
            بشكل كبير في ستينيّات هذا
            القرن مع إصدار
            رقائق "ليتراسيت" (Letraset) البلاستيكية تحوي
            مقاطع من هذا النص، وعاد لينتشر
             مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل "ألدوس بايج مايكر"
              (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم. ',
              'Body_en'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
               aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
               voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
               occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum.',
               'image'=>'images/12.png',
               'slug'=>'bloger2221',
               'Tags'=>'{1},{2},{3}',
               'pin_to_slider'=>'1',
               'created_at' => '2020-09-06 00:00:00.000000'


        ]);
        DB::table('blogs')->insert([
            'Title_ar'=>'بلوق 12',
            'Title_en'=>'blog 12',
            'Body_ar'=>'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص،
             لتكوّن كتيّب بمثابة دليل أو مرجع شكلي
             لهذه الأحرف. خمسة قرون من الزمن لم
             تقضي على هذا النص، بل انه حتى صار
             مستخدماً وبشكله الأصلي في الطباعة
            والتنضيد الإلكتروني. انتشر
            بشكل كبير في ستينيّات هذا
            القرن مع إصدار
            رقائق "ليتراسيت" (Letraset) البلاستيكية تحوي
            مقاطع من هذا النص، وعاد لينتشر
             مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل "ألدوس بايج مايكر"
              (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم. ',
              'Body_en'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
               aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
               voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
               occaecat cupidatat non proident,
               sunt in culpa qui officia deserunt mollit anim id est laborum.',
               'image'=>'images/12.png',
               'slug'=>'bloger22221',
               'Tags'=>'{1},{2},{3}',
               'pin_to_slider'=>'0',
               'created_at' => '2020-09-06 00:00:00.000000'


        ]);
    }

}
