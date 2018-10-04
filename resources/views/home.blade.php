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
          		<div class="flex flex-col mx-auto md:flex-row mt-2">
          		<div class="mx-4 my-4 rounded shadow-lg md:w-1/3">
          			<div class="items-center flex flex-row bg-navy-lighter px-4 py-4 text-white">
          				 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-8 h-8 mr-2" ><path fill="#2D4059" d="M3.33 8L10 12l10-6-10-6L0 6h10v2H3.33zM0 8v8l2-2.22V9.2L0 8zm10 12l-5-3-2-1.2v-6l7 4.2 7-4.2v6L10 20z"/></svg>
          				<h2> Development </h2>
          			</div>
          			<p class="mt-4 px-4 py-4">Develop good fundamental skills.</p>
          		</div>

          		<div class="mx-4 my-4 rounded shadow-lg md:w-1/3">
          			<div class="items-center flex flex-row bg-navy-lighter px-4 py-4 text-white">
          				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-8 h-8 mr-2"><path fill="#2D4059" d="M10 12a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-3a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4 2.75V20l-4-4-4 4v-8.25a6.97 6.97 0 0 0 8 0z"/></svg>
          				<h2> Sportsmanship </h2>
          			</div>
          			<p class="mt-4 px-4 py-4">Create an environment of competition and good sportsmanship.</p>
          		</div>

          		<div class="mx-4 my-4 rounded shadow-lg md:w-1/3">
          			<div class="items-center flex flex-row bg-navy-lighter w-full px-4 py-4 text-white">
									 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-8 h-8 mr-2"><path fill="#2D4059" d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
          				<h2> Fun </h2>
          			</div>
          			<p class="mt-4 px-4 py-4">Above all, have FUN!</p>
          		</div>
							</div>
          	</div>
          </div>

          @include('partials.footer')
    </body>
</html>