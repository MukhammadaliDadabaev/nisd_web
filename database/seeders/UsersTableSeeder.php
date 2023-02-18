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

    User::create([
      'name' => 'NISD_Admin',
      'role' => 0,
      'last_name' => 'Asimjanov',
      'photo' => 'nisd_admin.jepg',
      'phone' => '+998674771010',
      'email' => 'admin_nisd@gmail.com',
      'password' => Hash::make('password'),
    ]);
    User::create([
      'name' => 'Manager',
      'role' => 1,
      'last_name' => 'Malikhanov',
      'photo' => 'manager.jepg',
      'phone' => '+998674752000',
      'email' => 'manager_nisd@gmail.com',
      'password' => Hash::make('password'),
    ]);
    User::create([
      'name' => 'Client',
      'role' => 2,
      'last_name' => 'Studentov',
      'photo' => 'clien.jepg',
      'phone' => '+998674772020',
      'email' => 'client_nisd@gmail.com',
      'password' => Hash::make('password'),
    ]);
  }
}
