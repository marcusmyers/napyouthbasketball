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
						<td class="p-2 border-b border-grey-light">January 19, 2019</td>
						<td class="p-2 border-b border-grey-light">Cancelled</td>
						<td class="p-2 border-b border-grey-light">Cancelled</td>
					</tr>
				@elseif (str_contains($team->league->name,'Girls'))
					<tr>
						<td class="p-2 border-b border-grey-light">December 30, 2018</td>
						<td class="p-2 border-b border-grey-light">TBD</td>
						<td class="p-2 border-b border-grey-light">TBD</td>
					</tr>
				@endif
				</tbody>
			</table>
		</div>
		<div class="w-full mt-8">
			<h3>Practices <span class="text-xs text-grey-dark">*Practices are subject to change*</span></h3>
	    	<table class="w-full text-left table-collapse mt-4">
					<thead>
						<tr>
							<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Date</th>
							<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Location</th>
						</tr>
					</thead>
					<tbody>
				@foreach($team->practices as $practice)
					<tr>
						<td class="p-2 border-b border-grey-light">{{$practice->formatted_practice_date}} @ {{$practice->formatted_practice_time}}</td>
						<td class="p-2 border-b border-grey-light">{{$practice->location->building}} - {{$practice->location->court}}</td>
					</tr>
				@endforeach
					</tbody>
				</table>
		</div>
@endsection