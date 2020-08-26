<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('Title_ar')->nullable();
            $table->string('Title_en')->nullable();
            $table->longText('Body_ar')->nullable();
            $table->longText('Body_en')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->string('Tags');
            $table->boolean('pin_to_slider')->default(false);
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
        Schema::dropIfExists('blogs');
    }
}
