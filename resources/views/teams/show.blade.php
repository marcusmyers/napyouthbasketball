@extends('layouts.master')

@section('content')
		<h1>{{$team->name}}</h1>
		
		<div class="w-full mt-8">
			<h3>Roster</h3>
			<ul class="list-reset mt-4">
			@foreach($team->players as $player)
				<li class="py-2">{{$player->name}}</li>
			@endforeach
			</ul>
		</div>
		<div class="w-full mt-8">
			<h3>Games</h3>
			<table class="w-full text-left table-collapse mt-4">
				<thead>
					<tr>
						<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Date</th>
						<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Time</th>
						<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Opponent</th>
					</tr>
				</thead>
				<tbody>
				@foreach($team->games as $game)
					<tr>
						<td class="p-2 border-b border-grey-light">{{$game->formatted_game_date}}</td>
						<td class="p-2 border-b border-grey-light">{{$game->formatted_game_time}}</td>
						<td class="p-2 border-b border-grey-light"><a href="/teams/{{$game->opponent($team->id)->id}}" class="text-navy no-underline hover:text-navy-light">{{$game->opponent($team->id)->name}}</a></td>
					</tr>
				@endforeach
				@if (str_contains($team->league->name,'Boys'))
					<tr>
						<td class="p-2 border-b border-grey-light">January 26, 2019</td>
						<td class="p-2 border-b border-grey-light">TBD</td>
						<td class="p-2 border-b border-grey-light">TBD</td>
					</tr>
				@endif
				</tbody>
			</table>
		</div>
@endsection