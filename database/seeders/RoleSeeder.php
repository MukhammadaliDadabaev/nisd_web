<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
               'id' => 1,
                'name' => 'Super Admin',
                'guard_name' => 'web',
            ]);
        Role::create([
                'id' => 2,
                'name' => 'Admin',
                'guard_name' => 'web',
            ]);
        Role::create([
                'id' => 3,
                'name' => 'Project Manager',
                'guard_name' => 'web',
            ]);
        Role::create([
                'id' => 4,
                'name' => 'Editor',
                'guard_name' => 'web',
            ]);
        Role::create([
                'id' => 5,
                'name' => 'Member',
                'guard_name' => 'web',
         ]);
    }
}
