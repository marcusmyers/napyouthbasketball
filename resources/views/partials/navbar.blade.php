					<nav class="flex items-center justify-between bg-navy p-6 flex-wrap" id="nav">
					  @include('partials.logo')
					  	<div class="block sm:hidden">
					    	<button @click="toggle" class="flex items-center px-3 py-2 border rounded text-navy-lighter border-navy-light hover:text-white hover:border-white">
					      	<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
					    	</button>
					  	</div>
					  	<div :class="open ? 'block' : 'hidden'" class="w-full sm:items-center sm:w-auto sm:hidden md:block">
					  			<ul class="list-reset md:flex sm:flex-grow pin-r">
					    
						      	<!-- <li><a href="#responsive-header" class="font-sans block sm:inline-block sm:mt-0 mt-4 lg:inline-block lg:mt-0 text-navy-lighter no-underline hover:text-white mr-4">
						        Teams
						      	</a></li>

						      	<li><a href="#responsive-header" class="font-sans block mt-4 lg:inline-block lg:mt-0 text-navy-lighter no-underline hover:text-white mr-4">
						        Photos/Videos
						      	</a></li>
						      -->
						      	<li><a href="/forms" class="font-sans block mt-4 lg:inline-block lg:mt-0 text-navy-lighter no-underline hover:text-white">
						        Forms
						      	</a></li>
					    		</ul>
					  	</div>
					</nav>