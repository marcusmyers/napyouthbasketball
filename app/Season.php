<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'name', 'active'
    ];

    public function games()
    {
    	return $this->hasMany('App\Game');
    }
}
