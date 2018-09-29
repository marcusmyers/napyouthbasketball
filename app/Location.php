<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['building', 'court'];

    public function getFormattedLocationAttribute()
    {
    	return $this->building . ', ' .$this->court;
    }

    public function games()
    {
    	return $this->hasMany('App\Game');
    }
}
