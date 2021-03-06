<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
	protected $fillable = [
  	'practice_time', 'team_id', 'location_id'
  ];

  protected $dates = ['practice_time'];

  public function getFormattedPracticeDateAttribute()
  {
  	return $this->practice_time->format('F j, Y');
  }

  public function getFormattedPracticeTimeAttribute()
  {
  	return $this->practice_time->format('g:ia');
  }

  public function scopeNotOld($query)
  {
      return $query->where('practice_time', '>', Carbon::now());
  }

	public function team()
  {
    return $this->belongsTo('App\Team');
  }

  public function location()
  {
    return $this->belongsTo('App\Location');
  }
}
