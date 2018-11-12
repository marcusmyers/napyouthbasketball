<?php

namespace Tests\Unit;

use App\Game;
use App\League;
use App\Player;
use App\Team;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TeamsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_team_can_be_found_by_id()
    {
    	$team = factory(Team::class)->create();
        $foundTeam = Team::find($team->id);

        $this->assertEquals($team->id, $foundTeam->id);
        $this->assertEquals('image.png', $foundTeam->avatar);
        $this->assertEquals('team.jpg', $foundTeam->team_photo);
    }

    public function test_a_team_belongs_to_a_league()
    {
        $league = factory(League::class)->create();
        $team = factory(Team::class)->create(['league_id' => $league->id]);

        $foundTeam = Team::find($team->id);

        $this->assertEquals(1, $foundTeam->league()->count());
        $this->assertEquals($league->name, $foundTeam->league()->first()->name);
    }

    public function test_a_team_has_games()
    {
        $team = factory(Team::class)->create();
        $team->games()->attach(factory(Game::class, 5)->create());
        
        $this->assertEquals(5, $team->games()->count());
    }

    public function test_a_team_has_players()
    {
        $team = factory(Team::class)->create();
        factory(Player::class,7)->create(['team_id' => $team->id]);

        $this->assertEquals(7, $team->players()->count());
    }

    public function test_a_team_has_coaches()
    {
        $team = factory(Team::class)->create();
        $team2 = factory(Team::class)->create();
        factory(User::class)->create(['team_id' => $team->id]);
        factory(User::class,3)->create(['team_id' => $team2->id]);

        $this->assertEquals(1, $team->users()->count());
        $this->assertEquals(3, $team2->users()->count());
    }
}
