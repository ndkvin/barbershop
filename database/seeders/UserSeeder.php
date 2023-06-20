<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::create([
      'name' => 'Admin',
      'email' => 'admin@gmail.com',
      'role' => 'ADMIN',
      'password' => bcrypt('123123123'),
    ]);

    User::create([
      'name' => 'Barber',
      'email' => 'barber@gmail.com',
      'role' => 'BARBERMAN',
      'password' => bcrypt('123123123'),
    ]);

    User::create([
      'name' => 'Customer',
      'email' => 'customer@gmail.com',
      'role' => 'CUSTOMER',
      'password' => bcrypt('123123123'),
    ]);
  }
}
