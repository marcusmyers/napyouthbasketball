<?php

namespace App\Http\Controllers;

use App\Game;
use App\Practice;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function index()
    {
    	$practices = Practice::notOld()->whereNotNull('team_id')->orderBy('practice_time', 'asc')->get();
    	$games = Game::all()->sortBy('game_time');

    	return view('schedules.index', ['practices'=>$practices,'games'=>$games]);
    }
}
