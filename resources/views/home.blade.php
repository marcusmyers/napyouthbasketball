<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Napoleon Youth Basketball</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
				<div class="main">
					@include('partials.navbar')
	    		<div class="bg-cover-image lg:h-160">
	    			<img src='https://res.cloudinary.com/dblyrab9o/image/upload/v1538146117/napyouthbball/CoverPhoto/jesse-orrico-586601-unsplash.jpg'>
	    		</div>
     
          <div class="content container flex flex-row mx-auto justify">
          	<div class="flex flex-col container mx-auto px-5 pt-8 pb-8 justify">
          		<div><h1 class="font-sans">Goals</h1></div>
          		<div class="flex flex-col mx-auto sm:flex-row mt-2">
          		<div class="mx-4 my-4">
          			<h3> Development </h3>
          			<p class="mt-4">Develop good fundamental skills.</p>
          		</div>

          		<div class="mx-4 my-4">
          			<h3> Sportsmanship </h3>
          			<p class="mt-4">Create an environment of competition and good sportsmanship.</p>
          		</div>

          		<div class="mx-4 my-4">
          			<h3> Fun </h3>
          			<p class="mt-4">Above all have FUN!</p>
          		</div>
							</div>
          	</div>
          </div>

          @include('partials.footer')
    </body>
</html>