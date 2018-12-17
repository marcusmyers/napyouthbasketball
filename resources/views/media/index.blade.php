@extends('layouts.master')

@section('content')
	<h1>Photos</h1>
	<div class="w-full mt-8">
		<div class="flex flex-wrap -mx-2">
		@foreach($media as $item)
			<div class="lg:w-1/5 sm:w-1/2 md:w-1/3 px-3 py-3">
				<a href="{{Storage::disk('cloudinary')->url($item->photo)}}" target="_new"><img src="{{$item->thumb()}}" class="border-2 border-navy-light rounded shadow-lg w-full"></a>
			</div>
		@endforeach
		</div>
	</div>
@endsection