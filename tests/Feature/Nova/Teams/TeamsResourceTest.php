<?php

namespace Tests\Feature\Nova\Teams;

use App\League;
use App\Season;
use App\Team;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TeamsResourceTest extends TestCase
{
	public function setUp()
    {
        parent::setUp();
        $this->user->assignRole('super_administrator');
        Storage::fake();
    }
    
    public function test_team_can_be_retrieved_with_correct_resource_elements()
    {
        $league = factory(League::class)->create(['season_id' => factory(Season::class)->create()->id]);
        $team = factory(Team::class)->create(['league_id' => $league->id]);
  
        $response = $this->get('/nova-api/teams/'.$team->id);

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
                    [
                        'component' => 'belongs-to-field',
                        'attribute' => 'league',
                        'name' => 'League',
                        'value' => $league->name,
                    ],
                ],
            ],
        ]);
    }


    public function test_team_has_correct_validation_on_create()
    {
        $team = factory(Team::class)->make();
        $response = $this->post('/nova-api/teams/', 
            array_merge(
                $team->getAttributes(),
                [
                    'avatar' => UploadedFile::fake()->image('avatar.png'),
                    'team_photo' => UploadedFile::fake()->image('teamphoto.jpg'),
                ]
            ));

        $response->assertStatus(302);
    }

    public function test_name_is_required_on_create()
    {
        $response = $this->post('/nova-api/teams/', ['name'=>null]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'name' => 'The name field is required.',
        ]);
    }
}
