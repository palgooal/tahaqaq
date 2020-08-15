<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index('name');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('small_details_ar')->nullable();
            $table->string('small_details_en')->nullable();
            $table->longText('details_ar');
            $table->longText('details_en');
            $table->integer('category_id')->unsigned()->index('category');
            $table->string('image_url');
            $table->string('preview_url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('templates', function (Blueprint $table) {
            // $table->dropIndex('templates_name_index');
            // $table->dropIndex('templates_category_index');
        });
        Schema::dropIfExists('templates');
    }
}
