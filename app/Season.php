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

    public function leagues()
    {
    	return $this->belongsToMany('App\leagues');
    }

    public static function findActive()
    {
        return self::where('active', 1)->first();
    }
}
