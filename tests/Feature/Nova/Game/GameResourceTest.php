<?php

namespace Tests\Feature\Nova\Game;

use App\Game;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameResourceTest extends TestCase
{
	public function setUp()
  {
    parent::setUp();
    $this->user->assignRole('super_administrator');
  }

  public function test_game_can_be_retrieved_with_correct_resource_elements()
  {
    $this->expectException(\Illuminate\Auth\Access\AuthorizationException::class);
  	$game = factory(Game::class)->create();

  	$response = $this->get('/nova-api/games/'.$game->id);

  	$response->assertJson([
  		'resource' => [
                'id' => [
                    'value' => $game->id,
                ],
                'fields' => [
                    [
                        'component' => 'text-field',
                        'attribute' => 'id',
                        'value'     => $game->id,
                    ],
                    [
                        'component' => 'belongs-to-many-field',
                        'attribute' => 'teams',
                        'name' => 'Teams',
                        'value' => null,
                    ],
                    [
                    	'component' => 'date-time',
                    	'attribute' => 'game_time',
                    	'name' => 'Game Time',
                    	'value' => $game->game_time,
                    ],
                    [
                        'component' => 'belongs-to-field',
                        'attribute' => 'season',
                        'name' => 'Season',
                        'value' => null,
                    ],
                ],
            ],
  	]);
  }
}
