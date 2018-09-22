<?php

namespace Tests\Unit;

use App\League;
use App\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LeaguesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_league_can_be_found_by_id()
    {
        factory(League::class)->create();
        $foundLeague = League::find(1);

        $this->assertEquals(1, $foundLeague->id);
    }

    public function test_a_league_has_teams()
    {
    	$league = factory(League::class)->create();
    	factory(Team::class, 10)->create(['league_id' => $league->id]);	    

    	$this->assertEquals(10, $league->teams()->count());
    }
}
