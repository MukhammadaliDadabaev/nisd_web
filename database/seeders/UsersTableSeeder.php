<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $user = User::create([
      'name' => 'Super Admin',
//      'role_id' => 0,
      'last_name' => 'Supers',
      'photo' => 'supernisdadmin.jepg',
      'phone' => '+998674771010',
      'email' => 'superadminnisd@gmail.com',
      'password' => Hash::make('password'),
    ]);
    $user->roles()->attach([1,2]);

//    User::create([
//      'name' => 'Project Manager',
////      'role_id' => 1,
//      'last_name' => 'Malikhanov',
//      'photo' => 'manager.jepg',
//      'phone' => '+998674752000',
//      'email' => 'manager_nisd@gmail.com',
//      'password' => Hash::make('password'),
//    ]);

    $user1 = User::create([
      'name' => 'Ali Manager',
//      'role_id' => 2,
      'last_name' => 'Managers',
      'photo' => 'clien.jepg',
      'phone' => '+998674772020',
      'email' => 'managernisd@gmail.com',
      'password' => Hash::make('password'),
    ]);
    $user1->roles()->attach([3]);

    $user2 = User::create([
        'name' => 'Jonson Editor',
//        'role_id' => 3,
        'last_name' => 'Editirov',
        'photo' => 'clien.jepg',
        'phone' => '+998674772020',
        'email' => 'editornisd@gmail.com',
        'password' => Hash::make('password'),
      ]);
      $user2->roles()->attach([4]);

      $user3 = User::create([
          'name' => 'Roma Member',
//          'role_id' => 3,
          'last_name' => 'Members',
          'photo' => 'clien.jepg',
          'phone' => '+998674772020',
          'email' => 'membernisd@gmail.com',
          'password' => Hash::make('password'),
      ]);
      $user3->roles()->attach([5]);
  }
}
