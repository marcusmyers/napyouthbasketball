@extends('layouts.master')

@section('content')
    	<h1>Leagues</h1>
    	<div class="flex flex-col mx-auto md:flex-row mt-2 w-full">
			@foreach($leagues as $league)
				<div class="mx-4 my-4 rounded shadow-lg w-1/2">
					<div class="items-center flex flex-row bg-navy px-4 py-4 text-white">
						<h2>{{$league->name}}</h2>
					</div>
					<div>
						<ul class="list-reset">
						@foreach($league->teams as $team)
							<li class="ml-5 p-3"> <a href="/teams/{{$team->id}}" class="text-navy-darker no-underline hover:text-navy-light">{{$team->name}}</a></li>
						@endforeach
						</ul>
					</div>
				</div>
			@endforeach
			</div>
@endsection