<?php

use App\League;
use App\Season;
use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        League::create(['name'=>'2018-2019', 'season_id' => Season::all()->first()->id]);
    }
}
