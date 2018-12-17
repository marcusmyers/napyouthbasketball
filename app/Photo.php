<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
  public function thumb()
  {
  	return Storage::disk('cloudinary')->url([
  			'public_id' => $this->photo,
  			'options' => [
  				'width' => '150',
  				'height' => '150',
  				'crop' => 'thumb',
  			]
  		]);
  }
}
