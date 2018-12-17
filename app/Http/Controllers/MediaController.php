<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class MediaController extends Controller
{
	
	public function index()
	{
		$media = Photo::all()->sortByDesc('created_at');

		return view('media.index', ['media' => $media]);
	}
}
