<?php

use App\User;
use Illuminate\Database\Seeder;

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
         	'name' => 'Mark Myers',
         	'email' => 'marcusmyers@gmail.com',
         	'password' => bcrypt('password'),
         ]);
         User::create([
            'name' => 'Jode Myers',
            'email' => 'hovestj@gmail.com',
            'password' => bcrypt('password'),
         ]);
         User::find(1)->assignRole('super_administrator');
         User::find(2)->assignRole('coach');
    }
}