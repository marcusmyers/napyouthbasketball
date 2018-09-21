<?php

namespace Tests\Feature\Nova\Teams;

use App\Team;
use Tests\TestCase;

class TeamsResourceTest extends TestCase
{
	public function setUp()
    {
        parent::setUp();
        $this->user->assignRole('super_administrator');
    }
    
    public function test_team_can_be_retrieved_with_correct_resource_elements()
    {
        $team = factory(Team::class)->create();
  
  		// dd($team);
        $response = $this->actingAs($this->user)->get('/nova-api/teams/2');
        
        $response->assertJson([
            'resource' => [
                'id' => [
                    'value' => $team->id,
                ],
                'fields' => [
                    [
                        'component' => 'text-field',
                        'attribute' => 'id',
                        'value'     => $team->id,
                    ],
                    [
                        'component' => 'text-field',
                        'attribute' => 'name',
                        'name'      => 'Name',
                        'value'     => $team->name,
                    ],
                    [
                    	'component' => 'file-field',
                    	'attribute' => 'avatar',
                    	'name'      => 'Avatar',
                    	'value'		=> $team->avatar,
                    ],
                    [
                    	'component' => 'file-field',
                    	'attribute' => 'team_photo',
                    	'name'      => 'Team Photo',
                    	'value'		=> $team->team_photo,
                    ],
                ],
            ],
        ]);
    }
}
