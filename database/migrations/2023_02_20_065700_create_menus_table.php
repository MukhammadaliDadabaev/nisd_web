<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('title', 255);
            $table->string('url', 255);
            $table->integer('order');
            $table->string('type', 10);
            $table->string('option', 255)->nullable();
            $table->boolean('is_published')->default(1);
            $table->string('lang', 5);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
