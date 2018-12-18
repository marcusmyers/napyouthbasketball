<?php

namespace App;

use Carbon\Carbon;
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

    public function record()
    {
        return $this->wins->count() . "-". $this->losses();
    }

    public function losses()
    {
        $played = str_contains($this->league->name, 'Boys') ? ($this->gamesPlayed() - 1) : $this->gamesPlayed();
        return $played - $this->wins->count();
    }

    public function games()
    {
    	return $this->belongsToMany('App\Game');
    }

    public function gamesPlayed()
    {
        return $this->games->filter(function ($game) {
            return $game->game_time < Carbon::now();
        })->count();
    }

    public function practices()
    {
        return $this->hasMany('App\Practice');
    }

    public function wins()
    {
        return $this->hasMany('App\Game', 'winner_id');
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
