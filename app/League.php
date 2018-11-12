<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
	protected $fillable = [
        'name', 'season_id'
    ];
    
    public function teams()
    {
    	return $this->hasMany('App\Team');
    }

    public function season()
    {
        return $this->belongsTo('App\Season');
    }
}
