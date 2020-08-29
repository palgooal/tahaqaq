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
            'name'=>"SB Admin Pro",
            'title_ar'=>"تصميم برو",
            'title_en'=>"SB Admin Pro",
            'small_details_ar' =>"سمة مشرف Bootstrap مميزة",
            'small_details_en'=>"A premium Bootstrap admin theme",
            'details_ar'=>"SB Admin Pro عبارة عن سمة لوحة تحكم إدارية متميزة تستند إلى Bootstrap تم إنشاؤها بواسطة الفريق في Start Bootstrap. تتضمن المعاينة المباشرة مرجعًا كاملًا للمكون مع عينات من التعليمات البرمجية. تحتوي الوثائق على تعليمات الاستخدام للبدء ، وبناء مشروعك باستخدام ملفات المصدر ، وإنشاء صفحات جديدة ، وتوسيع تصميم السمات.

            ملفات HTML و CSS - يتضمن هذا المظهر ملفات HTML و CSS مجمعة بالكامل لسهولة الاستخدام. خذ هذه الملفات واعمل عليها في أي بيئة تطوير تختارها ، أو خصصها لتناسب احتياجاتك!
            ملفات المصدر - نستخدم SASS و Pug جنبًا إلى جنب مع بيئة تطوير قوية من أجل إنشاء سماتنا ، وستحصل على جميع ملفات المصدر المستخدمة لإنشاء السمة عند شراء هذا المنتج! يتيح لك ذلك تخصيص السمة بشكل أكبر من خلال العمل ضمن بيئة التطوير الخاصة بنا.
            تحديثات منتظمة - يقوم Start Bootstrap بتحديث السمات المجانية والمتميزة باستمرار لأكثر من 6 سنوات ، منذ عام 2013. ونحن نعمل بجد للحفاظ على منتجاتنا خالية من الأخطاء وتحديثها بانتظام لمطابقة التحديثات مع التبعيات الأساسية. نحن ملتزمون أيضًا بإضافة خيارات ووظائف جديدة إلى سماتنا بناءً على تعليقات المستخدمين.
            واجهة مستخدم نظيفة - يمكن تصميم العديد من سمات لوحة تحكم المشرف المتميزة بشكل مفرط ويصعب تكييفها لتناسب علامتك التجارية أو رؤيتك. يوفر SB Admin Pro واجهة نظيفة تم اختبارها بواسطة المستخدم والتي تعمل بسلاسة خارج الصندوق ، كما توفر للمطورين نقطة انطلاق أفضل للتخصيص.
            دعم العملاء - عند شراء SB Admin Pro ، إذا لم تتمكن من العثور على الإجابات التي تبحث عنها في الوثائق ، يمكنك الوصول إلى البريد الإلكتروني الخاص بالدعم وسنعاود الاتصال بك بالإجابات في أقرب وقت ممكن.
            خيارات التخطيط - مع تخطيطين مختلفين للوحة المعلومات ، ومجموعة متنوعة من خيارات رأس الصفحة ، وتخطيطات التنقل الثابتة مقابل تخطيطات التنقل الثابتة ، وخيارات تخصيص الألوان ، ودعم RTL ، يعد SB Admin Pro مناسبًا تمامًا لأي واجهة أمامية لتطبيق ويب.
            المكونات الموسعة - استنادًا إلى إطار عمل Bootstrap 4 ، وسع SB Admin Pro شكل ومظهر مكونات Bootstrap الافتراضية لجعل السمة تبدو فريدة من نوعها. لقد أضفنا أيضًا عددًا من المكونات والأدوات المخصصة المخصصة لمنحك المزيد للاختيار من بينها عند إنشاء مشروعك.
            مقتطفات التعليمات البرمجية - يتضمن العرض التوضيحي بأكمله بمثابة مرجع نمط العمل لجميع المكونات المضمنة في السمة. أثناء استعراضك للعرض التوضيحي ، سترى مقتطفات التعليمات البرمجية في كل من Pug و HTML التي يمكنك نسخها ولصقها في مشروعك أثناء عملك!
            وثائق مفصلة - تتضمن وثائق SB Admin Pro تعليمات الاستخدام ومراجع المكونات والبرامج التعليمية حول كيفية إعداد مشروعك وتشغيله وكيفية إنشاء تطبيقك باستخدام ملفات مصدر السمة.",

            'details_en'=>"SB Admin Pro is a premium, Bootstrap based admin dashboard theme built by the team at Start Bootstrap. The live preview includes complete component reference with code samples. The documentation contains usage instructions for getting started, building your project using source files, creating new pages, and extending the themes styling.

            HTML & CSS Files – This theme includes fully compiled HTML and CSS files for easy use. Take these files and work them into any development environment you choose, or customize them to fit your needs!
            Source Files – We use SASS and Pug along with a powerful development environment in order to create our themes, and you get all of the source files used to create the theme when you purchase this product! This allows you to customize the theme even further by working within our development environment.
            Regular Updates – Start Bootstrap has been consistently updating our free and premium themes for over 6 years, since 2013. We work hard to keep our products bug free and regularly updated to match updates with core dependencies. We’re also dedicated to adding new options and functionality to our themes based on user feedback.
            Clean User Interface – Many premium admin dashboard themes can be over-designed and difficult to adapt to fit your brand or vision. SB Admin Pro offers a clean, user tested interface that functions seamlessly out-of-the-box, and also gives developers a better starting point for customization.
            Customer Support – When you purchase SB Admin Pro, if you can’t find the answers you’re looking for in the documentation, you have access to our support email and we will get back to you with answers as soon as possible.
            Layout Options – With two different dashboard layouts, a variety of page header options, static vs. fixed navigation layouts, color customization options, and RTL support, SB Admin Pro is a perfect fit for any web application front-end.
            Expanded Components – Based on the Bootstrap 4 framework, SB Admin Pro has expanded the look and feel of default Bootstrap components to make the theme feel unique on it’s own. We’ve also added a number of custom components and utilities to give you more to choose from when building your project.
            Code Snippets – Our entire demo includes acts as a working style reference for all of the components included with the theme. As you look through the demo, you’ll see code snippets in both Pug and HTML that you can copy and paste into your project as you work!
            Detailed Documentation – SB Admin Pro’s documentation includes usage instructions, component references, and tutorials on how to get your project up and running, and how to build out your application using the theme’s source files.
        ",
            'category_id'=>"1",
            'image_url'=>"images/sb-admin-pro-html.jpg",
            'preview_url'=>"aaa",

        ]);




        DB::table('templates')->insert([
            'name'=>"SB Admin 2 ",
            'title_ar'=>"2 برو",
            'title_en'=>"SB Admin 2 ",
            'small_details_ar' =>"سمة مشرف Bootstrap مميزة",
            'small_details_en'=>"A premium Bootstrap admin theme",
            'details_ar'=>"SB Admin Pro عبارة عن سمة لوحة تحكم إدارية متميزة تستند إلى Bootstrap تم إنشاؤها بواسطة الفريق في Start Bootstrap. تتضمن المعاينة المباشرة مرجعًا كاملًا للمكون مع عينات من التعليمات البرمجية. تحتوي الوثائق على تعليمات الاستخدام للبدء ، وبناء مشروعك باستخدام ملفات المصدر ، وإنشاء صفحات جديدة ، وتوسيع تصميم السمات.

            ملفات HTML و CSS - يتضمن هذا المظهر ملفات HTML و CSS مجمعة بالكامل لسهولة الاستخدام. خذ هذه الملفات واعمل عليها في أي بيئة تطوير تختارها ، أو خصصها لتناسب احتياجاتك!
            ملفات المصدر - نستخدم SASS و Pug جنبًا إلى جنب مع بيئة تطوير قوية من أجل إنشاء سماتنا ، وستحصل على جميع ملفات المصدر المستخدمة لإنشاء السمة عند شراء هذا المنتج! يتيح لك ذلك تخصيص السمة بشكل أكبر من خلال العمل ضمن بيئة التطوير الخاصة بنا.
            تحديثات منتظمة - يقوم Start Bootstrap بتحديث السمات المجانية والمتميزة باستمرار لأكثر من 6 سنوات ، منذ عام 2013. ونحن نعمل بجد للحفاظ على منتجاتنا خالية من الأخطاء وتحديثها بانتظام لمطابقة التحديثات مع التبعيات الأساسية. نحن ملتزمون أيضًا بإضافة خيارات ووظائف جديدة إلى سماتنا بناءً على تعليقات المستخدمين.
            واجهة مستخدم نظيفة - يمكن تصميم العديد من سمات لوحة تحكم المشرف المتميزة بشكل مفرط ويصعب تكييفها لتناسب علامتك التجارية أو رؤيتك. يوفر SB Admin Pro واجهة نظيفة تم اختبارها بواسطة المستخدم والتي تعمل بسلاسة خارج الصندوق ، كما توفر للمطورين نقطة انطلاق أفضل للتخصيص.
            دعم العملاء - عند شراء SB Admin Pro ، إذا لم تتمكن من العثور على الإجابات التي تبحث عنها في الوثائق ، يمكنك الوصول إلى البريد الإلكتروني الخاص بالدعم وسنعاود الاتصال بك بالإجابات في أقرب وقت ممكن.
            خيارات التخطيط - مع تخطيطين مختلفين للوحة المعلومات ، ومجموعة متنوعة من خيارات رأس الصفحة ، وتخطيطات التنقل الثابتة مقابل تخطيطات التنقل الثابتة ، وخيارات تخصيص الألوان ، ودعم RTL ، يعد SB Admin Pro مناسبًا تمامًا لأي واجهة أمامية لتطبيق ويب.
            المكونات الموسعة - استنادًا إلى إطار عمل Bootstrap 4 ، وسع SB Admin Pro شكل ومظهر مكونات Bootstrap الافتراضية لجعل السمة تبدو فريدة من نوعها. لقد أضفنا أيضًا عددًا من المكونات والأدوات المخصصة المخصصة لمنحك المزيد للاختيار من بينها عند إنشاء مشروعك.
            مقتطفات التعليمات البرمجية - يتضمن العرض التوضيحي بأكمله بمثابة مرجع نمط العمل لجميع المكونات المضمنة في السمة. أثناء استعراضك للعرض التوضيحي ، سترى مقتطفات التعليمات البرمجية في كل من Pug و HTML التي يمكنك نسخها ولصقها في مشروعك أثناء عملك!
            وثائق مفصلة - تتضمن وثائق SB Admin Pro تعليمات الاستخدام ومراجع المكونات والبرامج التعليمية حول كيفية إعداد مشروعك وتشغيله وكيفية إنشاء تطبيقك باستخدام ملفات مصدر السمة.",

            'details_en'=>"SB Admin Pro is a premium, Bootstrap based admin dashboard theme built by the team at Start Bootstrap. The live preview includes complete component reference with code samples. The documentation contains usage instructions for getting started, building your project using source files, creating new pages, and extending the themes styling.

            HTML & CSS Files – This theme includes fully compiled HTML and CSS files for easy use. Take these files and work them into any development environment you choose, or customize them to fit your needs!
            Source Files – We use SASS and Pug along with a powerful development environment in order to create our themes, and you get all of the source files used to create the theme when you purchase this product! This allows you to customize the theme even further by working within our development environment.
            Regular Updates – Start Bootstrap has been consistently updating our free and premium themes for over 6 years, since 2013. We work hard to keep our products bug free and regularly updated to match updates with core dependencies. We’re also dedicated to adding new options and functionality to our themes based on user feedback.
            Clean User Interface – Many premium admin dashboard themes can be over-designed and difficult to adapt to fit your brand or vision. SB Admin Pro offers a clean, user tested interface that functions seamlessly out-of-the-box, and also gives developers a better starting point for customization.
            Customer Support – When you purchase SB Admin Pro, if you can’t find the answers you’re looking for in the documentation, you have access to our support email and we will get back to you with answers as soon as possible.
            Layout Options – With two different dashboard layouts, a variety of page header options, static vs. fixed navigation layouts, color customization options, and RTL support, SB Admin Pro is a perfect fit for any web application front-end.
            Expanded Components – Based on the Bootstrap 4 framework, SB Admin Pro has expanded the look and feel of default Bootstrap components to make the theme feel unique on it’s own. We’ve also added a number of custom components and utilities to give you more to choose from when building your project.
            Code Snippets – Our entire demo includes acts as a working style reference for all of the components included with the theme. As you look through the demo, you’ll see code snippets in both Pug and HTML that you can copy and paste into your project as you work!
            Detailed Documentation – SB Admin Pro’s documentation includes usage instructions, component references, and tutorials on how to get your project up and running, and how to build out your application using the theme’s source files.
        ",
            'category_id'=>"2",
            'image_url'=>"images/sb-admin-pro-html.jpg",
            'preview_url'=>"ttt",

        ]);
    }
}
