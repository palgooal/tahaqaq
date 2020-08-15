<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_specifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('template_id')->unsigned()->index('template');
            $table->string('text');
            $table->string('image');
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
        Schema::table('template_specifications', function (Blueprint $table) {
            $table->dropIndex('template_specifications_template_index');
        });
        Schema::dropIfExists('template_specifications');
    }
}
