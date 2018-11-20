@extends('layouts.master')

@section('content')
			<h1>Schedules</h1>
			<div class="w-full mt-8">
	    	<h2>Practices</h2>
	    	<table class="w-full text-left table-collapse mt-4">
					<thead>
						<tr>
							<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Date</th>
							<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Location</th>
							<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Team</th>
						</tr>
					</thead>
					<tbody>
				@foreach($practices as $practice)
					<tr>
						<td class="p-2 border-b border-grey-light">{{$practice->formatted_practice_date}} @ {{$practice->formatted_practice_time}}</td>
						<td class="p-2 border-b border-grey-light">{{$practice->location->first()->building}} - {{$practice->location->first()->building}}</td>
						<td class="p-2 border-b border-grey-light">{{$practice->team->first()->name}}</td>
					</tr>
				@endforeach
					</tbody>
				</table>
			</div>

			<div class="w-full mt-8">
			<h2>Games</h2>
			<table class="w-full text-left table-collapse mt-4">
				<thead>
					<tr>
						<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Date</th>
						<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Time</th>
						<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Home</th>
						<th class="text-lg font-semibold text-navy-darker p-2 bg-navy-lighter">Away</th>
					</tr>
				</thead>
				<tbody>
			@foreach($games as $game)
				<tr>
					<td class="p-2 border-b border-grey-light">{{$game->formatted_game_date}}</td>
					<td class="p-2 border-b border-grey-light">{{$game->formatted_game_time}}</td>
					<td class="p-2 border-b border-grey-light"><a href="/teams/{{$game->teams->first()->id}}" class="text-navy no-underline hover:text-navy-light">{{$game->teams->first()->name}}</a></td>
					<td class="p-2 border-b border-grey-light"><a href="/teams/{{$game->teams->last()->id}}" class="text-navy no-underline hover:text-navy-light">{{$game->teams->last()->name}}</a></td>
				</tr>
			@endforeach
				</tbody>
			</table>
			</div>
@endsection