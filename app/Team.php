<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $fillable = [
        'name', 'league_id', 'avatar', 'team_photo',
    ];

    public function league()
    {
    	return $this->belongsTo('App\League');
    }

    public function games()
    {
    	return $this->belongsToMany('App\Game');
    }
}
