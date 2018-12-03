<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Napoleon Youth Basketball</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127063799-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-127063799-1');
        </script>
        
    </head>
    <body>
				<div class="main">
          {{-- {!! Announce::display() !!} --}}
					@include('partials.navbar')
     
          <div class="content container flex flex-row mx-auto justify">
          	<div class="flex flex-col container mx-auto px-5 pt-8 pb-8 justify">
          	 @yield('content')	
          	</div>
          </div>

          @include('partials.footer')
    </body>
</html>