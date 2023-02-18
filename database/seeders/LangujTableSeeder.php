<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LangujTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Language::create([
      'name' => 'Uzbek',
      'code' => 'uz',
      'is_default' => 1,
      'flag' => 'uzbek.png',
      'active' => 1,
    ]);
    Language::create([
      'name' => 'Русский',
      'code' => 'ru',
      'is_default' => 0,
      'flag' => 'russian.png',
      'active' => 1,
    ]);
    Language::create([
      'name' => 'English',
      'code' => 'en',
      'is_default' => 0,
      'flag' => 'english.png',
      'active' => 1,
    ]);
  }
}
