<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
	protected $fillable = [
        'name',
    ];
    
    public function teams()
    {
    	return $this->hasMany('App\Team');
    }
}
