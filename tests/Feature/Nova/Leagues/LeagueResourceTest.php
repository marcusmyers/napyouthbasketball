<?php

namespace Tests\Feature\Nova\Leagues;

use App\League;
use App\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LeagueResourceTest extends TestCase
{
	public function setUp()
    {
        parent::setUp();
        $this->user->assignRole('super_administrator');
    }
    
    public function test_league_can_be_retrieved_with_correct_resource_elements()
    {
    	$league = factory(League::class)->create();
    	factory(Team::class, 4)->create(['league_id'=>$league->id]);
    	
    	$response = $this->get('/nova-api/leagues/'.$league->id);
    	
    	$response->assertJson([
            'resource' => [
                'id' => [
                    'value' => $league->id,
                ],
                'fields' => [
                    [
                        'component' => 'text-field',
                        'attribute' => 'id',
                        'value'     => $league->id,
                    ],
                    [
                        'component' => 'text-field',
                        'attribute' => 'name',
                        'name'      => 'Name',
                        'value'     => $league->name,
                    ],
                    [
                        'component' => 'belongs-to-field',
                        'attribute' => 'season',
                        'name' => 'Season',
                        'value' => null,
                    ],
                    [
                        'component' => 'has-many-field',
                        'attribute' => 'teams',
                        'name' => 'Teams',
                        'value' => null,
                    ],
                ],
            ],
        ]);
    }

    public function test_league_has_correct_validation_on_create()
    {
        $league = factory(\App\League::class)->make();
        $response = $this->post('/nova-api/leagues/', $league->toArray());
        
        $response->assertStatus(302);
    }

    public function test_name_is_required_on_create()
    {
        $response = $this->post('/nova-api/leagues/', ['name'=>null]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'name' => 'The name field is required.',
        ]);
    }
}
