<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Blog::create([
      'title' => 'Sigaretalar',
      'user_id' => 1,
      'category_id' => 1,
      'status' => '1',
      'lang' => 'ru',
      'content' => 'Chekishning zarari shundaki, u uchta asosiy kasallikni keltirib chiqaradi o‘pka saratoni, surunkali bronxit, yurak-qon tomir kasalliklari.',
      'image' => 'sigaret.png',
      'public_date' => date('Y-m-d H:i:s'),
    ],);
    Blog::create([
      'title' => 'Spirtli ichimliklar',
      'user_id' => 2,
      'category_id' => 2,
      'status' => '1',
      'lang' => 'uz',
      'content' => 'Spirtli ichimliklar markaziy asab tizimini buzadi',
      'image' => 'spirt_ichimlik.jepg',
      'public_date' => date('Y-m-d H:i:s'),
    ]);
    Blog::create([
      'title' => 'Narkotiklar',
      'user_id' => 3,
      'category_id' => 3,
      'status' => '1',
      'lang' => 'en',
      'content' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
      'image' => 'narkotik.jepg',
      'public_date' => date("Y-m-d H:i:s", time() + 18000),
    ]);
  }
}
