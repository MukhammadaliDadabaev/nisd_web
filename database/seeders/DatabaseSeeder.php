<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'NISD_WEB',
      'email' => 'nisd_web@gmail.com',
      'password' => Hash::make('password'),
    ]);
    DB::table('users')->insert([
      'name' => 'USER',
      'email' => 'user_nisd@gmail.com',
      'password' => Hash::make('password'),
    ]);
    DB::table('users')->insert([
      'name' => 'CLIENT',
      'email' => 'client_nisd@gmail.com',
      'password' => Hash::make('password'),
    ]);

    DB::table('pages')->insert([
      'title' => 'Narkotiklar',
      'status' => '1',
      'lang' => 'uz',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
    DB::table('pages')->insert([
      'title' => 'Ichimliklar',
      'status' => '2',
      'lang' => 'ru',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
    DB::table('pages')->insert([
      'title' => 'Dorilar',
      'status' => '3',
      'lang' => 'en',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);

    DB::table('categories')->insert([
      'title' => 'Zaxar',
      'status' => '1',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
    DB::table('categories')->insert([
      'title' => 'Narkotik',
      'status' => '2',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);
    DB::table('categories')->insert([
      'title' => 'Suvlar',
      'status' => '3',
      'description' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
    ]);

    DB::table('blogs')->insert([
      'title' => 'Sigaretalar',
      'user_id' => 1,
      'category_id' => 1,
      'status' => '3',
      'lang' => 'ru',
      'content' => 'Chekishning zarari shundaki, u uchta asosiy kasallikni keltirib chiqaradi o‘pka saratoni, surunkali bronxit, yurak-qon tomir kasalliklari.',
      'image' => 'sigaret.png',
      'public_date' => date('Y-m-d H:i:s'),
    ]);
    DB::table('blogs')->insert([
      'title' => 'Spirtli ichimliklar',
      'user_id' => 2,
      'category_id' => 2,
      'status' => '2',
      'lang' => 'uz',
      'content' => 'Spirtli ichimliklar markaziy asab tizimini buzadi',
      'image' => 'spirt_ichimlik.jepg',
      'public_date' => date('Y-m-d H:i:s'),
    ]);
    DB::table('blogs')->insert([
      'title' => 'Narkotiklar',
      'user_id' => 3,
      'category_id' => 3,
      'status' => '3',
      'lang' => 'en',
      'content' => 'Giyohvand moddalar asab tizimi  va miyaga salbiy ta\'sir qiladi.',
      'image' => 'narkotik.jepg',
      'public_date' => date("Y-m-d H:i:s", time() + 18000),
    ]);

    DB::table('languages')->insert([
      'name' => 'uz',
      'code' => 1,
      'is_default' => 1,
      'flag' => 'uzbek',
      'active' => 1,
    ]);
    DB::table('languages')->insert([
      'name' => 'ru',
      'code' => 2,
      'is_default' => 2,
      'flag' => 'ruscha',
      'active' => 2,
    ]);
    DB::table('languages')->insert([
      'name' => 'en',
      'code' => 3,
      'is_default' => 3,
      'flag' => 'english',
      'active' => 3,
    ]);
  }
}
