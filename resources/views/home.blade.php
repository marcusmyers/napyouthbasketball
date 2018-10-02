<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Napoleon Youth Basketball</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
				<div class="main">
					<nav class="flex items-center justify-between bg-navy p-6">
					  @include('partials.logo')
					  <div class="block md:hidden">
					    <button class="flex items-center px-3 py-2 border rounded text-navy-lighter border-navy-light hover:text-white hover:border-white">
					      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
					    </button>
					  </div>
					  <ul class="list-reset hidden sm:flex  sm:li-pl-4 li-pb-4 md:li-pb-0 pin-r">
					    <!-- <div class="text-sm lg:flex-grow"> -->
					      <li><a href="#responsive-header" class="font-sans block mt-4 lg:inline-block lg:mt-0 text-navy-lighter no-underline hover:text-white mr-4">
					        Teams
					      </a></li>

					      <li><a href="#responsive-header" class="font-sans block mt-4 lg:inline-block lg:mt-0 text-navy-lighter no-underline hover:text-white mr-4">
					        Photos/Videos
					      </a></li>
					      <li><a href="#responsive-header" class="font-sans block mt-4 lg:inline-block lg:mt-0 text-navy-lighter no-underline hover:text-white">
					        Forms
					      </a>
					    	</li>
					    </ul>
					    <!-- </div> -->
					  </div>
					</nav>
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

          <footer class="flex flex-row w-full h-32 shadow bg-navy-light">
          	<div class="container mx-auto items-center flex">
          		<div class="footer-menu w-1/2 text-left">
          			<ul class="list-reset sm:flex text-lg flex-col text-left">
          				<li><a href="/teams" class="text-navy-darker no-underline hover:text-white">Teams</a></li>
          				<li><a href="/teams" class="text-navy-darker no-underline hover:text-white">Photos & Videos</a></li>
          				<li><a href="/teams" class="text-navy-darker no-underline hover:text-white">Forms</a></li>
          			</ul>
          		</div>
          		<div class="footer-menu w-1/2 text-right">
	          		<div class="social-icons pin-r">
	          			<a target="_blank" href="https://www.twitter.com/napyth">
								      <svg xmlns="http://www.w3.org/2000/svg"
												aria-label="Twitter" role="img"
												viewBox="0 0 512 512"><rect
												width="512" height="512"
												rx="15%"
												fill="#1da1f3"/>
												<path fill="#fff" d="M437 152a72 72 0 0 1-40 12 72 72 0 0 0 32-40 72 72 0 0 1-45 17 72 72 0 0 0-122 65 200 200 0 0 1-145-74 72 72 0 0 0 22 94 72 72 0 0 1-32-7 72 72 0 0 0 56 69 72 72 0 0 1-32 1 72 72 0 0 0 67 50 200 200 0 0 1-105 29 200 200 0 0 0 309-179 200 200 0 0 0 35-37"/></svg>
								  </a>

		          		<a target="_blank" href="https://www.facebook.com/groups/280957275856227/">
								      <svg xmlns="http://www.w3.org/2000/svg"
								            aria-label="Facebook" role="img"
								            viewBox="0 0 512 512">
								           <rect
								                   width="512" height="512"
								                   rx="15%"
								                   fill="#3b5998"/>
								           <path fill="#fff"
								                 d="M330 512V322h64l9-74h-73v-47c0-22 6-36 37-36h39V99c-7-1-30-3-57-3-57 0-95 34-95 98v54h-64v74h64v190z"/>
								      </svg>
								  </a>
								</div>
          		</div>
          	</div>
          </footer>
	        <div class="bg-navy-darkest text-center text-white no-underline h-8 items-center">
	        	<div class="items-center container mx-auto">
	        		<p class="pt-2">
		        		Website by <a href="https://www.bandmtechnologies.com" class="text-navy-lighter no-underline hover:text-white">B & M Technologies</a>
		        	</p>
	        	</div>
	        </div>
	      </div>
    </body>
</html>