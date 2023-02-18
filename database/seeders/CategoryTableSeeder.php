<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Category::create([
      'title' => 'Zaxar',
      'status' => '1',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
    Category::create([
      'title' => 'Narkotik',
      'status' => '1',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
    Category::create([
      'title' => 'Suvlar',
      'status' => '1',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
  }
}
