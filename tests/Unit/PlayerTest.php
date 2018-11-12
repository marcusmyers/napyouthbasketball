<?php

namespace Tests\Unit;

use App\Player;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlayerTest extends TestCase
{
	public function test_a_player_can_be_found_by_id()
  {
  	$player = factory(Player::class)->create();
  	$foundPlayer = Player::find($player->id);

    $this->assertEquals($player->id, $foundPlayer->id);
    $this->assertEquals($player->first_name, $foundPlayer->first_name);
  }

  public function test_a_player_can_return_full_name()
  {
  	$player = factory(Player::class)->create(['first_name' => 'Mark', 'last_name' => 'Myers']);

  	$this->assertEquals($player->name, 'Mark Myers');
  }
}
