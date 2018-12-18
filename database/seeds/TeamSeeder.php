<?php

use App\League;
use App\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create(['name' => 'Falcons', 'league_id' => '1']);
        Team::create(['name' => 'Rockets', 'league_id' => '1']);
    }
}
