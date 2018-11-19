<?php

namespace Tests\Unit;

use App\Game;
use App\Season;
use App\Team;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameTest extends TestCase
{
    public function test_game_can_be_found_by_id()
    {
    	$game = factory(Game::class)->create();
    	$foundGame = Game::find($game->id);

        $this->assertEquals($game->id, $foundGame->id);
        $this->assertEquals($game->team_id, $foundGame->team_id);
        $this->assertEquals($game->opponent_id, $foundGame->opponent_id);
    }

    public function test_can_get_formatted_date()
    {
    	$game = factory(Game::class)->create(['game_time' => Carbon::parse('2016-12-01 1:00pm')]);

    	$this->assertEquals('December 1, 2016', $game->formatted_game_date);
    }

    public function test_can_get_formatted_time()
    {
    	$game = factory(Game::class)->create(['game_time' => Carbon::parse('2016-12-01 13:00')]);

    	$this->assertEquals('1:00pm', $game->formatted_game_time);
    }

    public function test_game_belongs_to_a_season()
    {
        $season = factory(Season::class)->state('active')->create();
        $game = factory(Game::class)->create(['season_id' => $season->id]);

        $this->assertEquals(1, $game->season()->count());
    }

    public function test_can_get_opponnet()
    {
        $team = factory(Team::class)->create();
        $opponent = factory(Team::class)->create();
        $season = factory(Season::class)->state('not_active')->create();
        $game = factory(Game::class)->create(['season_id' => $season->id]);
        $game->teams()->attach($team);
        $game->teams()->attach($opponent);

        $foundGame = Game::find($game->id);

        $this->assertEquals($opponent->name, $foundGame->opponent($team->id)->name);
    }

    public function test_can_get_all_game_data()
    {
        $team = factory(Team::class)->create();
        $opponent = factory(Team::class)->create();
        $season = factory(Season::class)->state('not_active')->create();
        $game = factory(Game::class)->create(['season_id' => $season->id]);
        $game->teams()->attach($team);
        $game->teams()->attach($opponent);

        $foundGame = Game::find($game->id);

        $this->assertEquals($game->game_time, $foundGame->game_time);
        $this->assertEquals(2, $foundGame->teams()->count());
        $this->assertEquals($season->name, $foundGame->season()->first()->name);
    }
}
