<?php

namespace App\Http\Controllers;

use App\Game;
use App\Practice;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function index()
    {
    	$practices = Practice::notOld()->whereNotNull('team_id')->get();
    	$games = Game::all();

    	return view('schedules.index', ['practices'=>$practices,'games'=>$games]);
    }
}
