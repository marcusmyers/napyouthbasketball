<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $fillable = [
		'first_name',
		'last_name',
		'address',
		'phone',
    'alt_phone',
    'email',
    'grade',
    'parents_names',
    'paid',
    'shirt_size',
    'signed_waiver',
    'willing_to_coach',
    'team_id'
	];

	public function getNameAttribute()
  {
  	return $this->first_name . ' ' .$this->last_name;
  }

  public function team()
  {
   	return $this->belongsTo('App\Team');
  }
}
