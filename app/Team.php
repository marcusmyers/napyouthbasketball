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

    public function practices()
    {
        return $this->hasMany('App\Practice');
    }

    public function players()
    {
        return $this->hasMany('App\Player');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
