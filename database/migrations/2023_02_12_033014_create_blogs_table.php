<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->foreignId('category_id')->constrained()->onDelete('cascade');
      $table->string('title');
      $table->text('content');
      $table->integer('status');
      $table->string('lang');
      $table->text('image')->nullable();
      $table->dateTime('public_date')->nullable(date("Y-m-d H:i:s", time() + 18000));
      $table->timestamps();

      // $table->unsignedBigInteger('user_id');
      // $table->unsignedBigInteger('category_id');
      // $table->foreign('user_id')->on('users')->references('id');
      // $table->foreign('category_id')->on('categories')->references('id');
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
};
