<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $seeders = [
        RolesAndPermissionsSeeder::class,
        SeasonSeeder::class,
        LeagueSeeder::class,
        UsersTableSeeder::class,
        LocationSeeder::class,
        TeamSeeder::class
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call($this->seeders);
    }
}
