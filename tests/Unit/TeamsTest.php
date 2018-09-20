<?php

namespace Tests\Unit;

use App\Team;
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
    	factory(Team::class)->create();
        $foundTeam = Team::find(1);

        $this->assertEquals(1, $foundTeam->id);
    }
}
