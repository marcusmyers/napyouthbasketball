@extends('layouts.master')

@section('content')
		<h1>{{$team->name}}</h1>
		
		<div class="w-full mt-8">
			<h3>Roster</h3>
			<ul class="list-reset mt-4">
			@foreach($team->players as $player)
				<li>{{$player->name}}</li>
			@endforeach
			</ul>
		</div>
@endsection