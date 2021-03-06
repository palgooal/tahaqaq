<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MenuSeeder::class,
            UserSeeder::class,
            SysVarSeeder::class,
            TemplateSeeder::class,
            TemplateCategorySeeder::class,
            BlogSeeder::class,
            PageSeeder::class,
            PricingSeeder::class,

        ]);
    }
}
