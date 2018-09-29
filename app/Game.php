<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
    	'game_time', 'season_id', 'outcome',
    ];

    protected $dates = ['game_time'];

    public function getFormattedGameDateAttribute()
    {
    	return $this->game_time->format('F j, Y');
    }

    public function getFormattedGameTimeAttribute()
    {
    	return $this->game_time->format('g:ia');
    }

    public function season()
    {
        return $this->belongsTo('App\Season');
    }

    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
