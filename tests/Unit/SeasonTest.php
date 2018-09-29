<?php

namespace Tests\Unit;

use App\Game;
use App\Season;
use App\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeasonTest extends TestCase
{
    public function test_a_season_can_be_found_by_id()
    {
    	$season = factory(Season::class)->state('active')->create();
    	$foundSeason = Season::find($season->id);

        $this->assertEquals($season->id, $foundSeason->id);
        $this->assertEquals($season->name, $foundSeason->name);
    }

    public function test_a_season_has_games()
    {
    	$season = factory(Season::class)->state('active')->create();

    	$game1 = factory(Game::class)->create(['season_id'=>$season->id]);
    	$game2 = factory(Game::class)->create(['season_id'=>$season->id]);
        $game1->teams()->attach(factory(Team::class, 2)->create());
        $game2->teams()->attach(factory(Team::class, 2)->create());

    	$this->assertEquals(2, $season->games()->count());
    }
}
