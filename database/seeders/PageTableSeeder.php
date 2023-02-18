<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    Page::create([
      'title' => 'Narkotiklar',
      'status' => '1',
      'lang' => 'uz',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
    Page::create([
      'title' => 'Ichimliklar',
      'status' => '2',
      'lang' => 'ru',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
    Page::create([
      'title' => 'Dorilar',
      'status' => '3',
      'lang' => 'en',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
  }
}
