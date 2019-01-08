@extends('layouts.master')

@section('content')
					<div class="content container flex flex-row mx-auto justify">
          	<div class="flex flex-col container mx-auto px-5 pt-8 pb-8 justify">
          		<h1>
          			Grand Canyon Shootout
          			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" width="25" height="25" class="mr-2">
<g fill="#cc5500"><path d="M289.9,318.7c2.8,0,5.5,0,8.3,0c2.6-8.5,5.3-16.9,8.2-25.3c27.4-80,66.7-151.9,116.8-213.7c20.7-25.5,42.8-48.8,66.2-69.7c-129.6,2.8-246.8,55.9-332.9,140.5c37.4,47.9,60.2,106.8,65.8,169.8C244.6,319.3,267.2,318.7,289.9,318.7z"/><path d="M127.9,181.2c-40.4,47.1-72,101.9-92.2,162c47.6-9.4,96.2-16.1,145.5-20.1C176.1,269.4,156.9,220.5,127.9,181.2z"/><path d="M481.7,569.1c-32.7-58.2-44.3-116.4-34.6-173c1.5-8.8,3.5-17.5,6-26c-40.4-5.1-81.8-8.4-123.9-9.7c-15.8,61-24.4,126.1-24.4,193.6c0,167.2,52.5,319.4,138.1,432.5c18.7,2.2,37.8,3.3,57.2,3.3c134.5,0,256.3-54.2,344.8-141.9c-83.2-34.2-158-75.9-220.6-123.5C560.3,676,512.4,623.7,481.7,569.1z"/><path d="M182.1,364.3c-54.7,4.5-107.9,12.5-159.2,23.5c-8.4,36-12.9,73.5-12.9,112.1c0,35.3,3.7,69.7,10.8,102.9C110.9,569.7,177.2,476,182.1,364.3z"/><path d="M850,157c-40,6.9-78.2,16.1-114,27.6C627,219.6,550,272.5,512,337.3c48.4,8.3,95.9,19.2,142.3,33c111.8,33.1,212.4,80.5,298.8,141c12.2,8.5,24,17.3,35.5,26.2c0.9-12.4,1.4-24.8,1.4-37.4C990,366.4,936.6,245.3,850,157z"/><path d="M468.8,330.7c15.6-31,38.5-59.8,68.5-86.1c47.1-41.3,109.7-74.6,186.1-99.2c28.3-9.1,58-16.8,88.8-23.1C739.8,62.4,649.9,22.9,551.3,12.6C457,83.4,382.5,191.2,341,319.7C384.1,321.3,426.8,325,468.8,330.7z"/><path d="M263.6,554.1c0-66.5,7.8-131.6,23.2-194.2c-21.3,0-42.5,0.6-63.5,1.7C221,438.8,193,511.2,144,566.3c-32,36-70.6,61.9-112.8,76.6c50.2,164.9,185,292.9,353.9,333.5c-32.3-49-58.8-103.2-78.8-161.6C278,732.2,263.6,644.5,263.6,554.1z"/><path d="M487.6,403.1c-16.2,94.7,41.1,197.2,161.5,288.7c63.4,48.2,140,90.1,225.6,123.9c54.5-64.6,92.7-143.6,107.9-230.4C859,482.5,688.7,407.4,494.4,376.1C491.5,384.9,489.2,393.9,487.6,403.1z"/></g>
</svg>
          		</h1>
							
          		<p class="mt-8"><b>Tournament Director: </b> Joe Good <a href="mailto:jgood@napoleonareaschools.org"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"  width="15" height="15"><path fill="#2D4059" d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/></svg></a></p>

          		<p class="mt-4"><b>Location: </b> Napoleon Junior/Senior High School</p>
          		<p class="mt-4"><b>Date: <i>February 16, 2019</i> **3 GAME GUARANTEE** </b></p>
          		<p class="mt-4"><b>Entry Deadline:  FEBRUARY 8, 2019</b><i>(OR AS SOON AS TOURNAMENT FILLS - SPACE WILL BE LIMITED)
</i></p>
          		<p class="mt-4">
          			<b>Divisions: </b> <i>(Not all Divisions may have enough teams to participate - Sign up Early)</i><br>
          			<ul>
          				<li class="mt-2">6th Boys</li>
          				<li class="mt-2">5th Boys</li>
          				<li class="mt-2">4th Boys</li>
          				<li class="mt-2">6th Girls</li>
          				<li class="mt-2">5th Girls</li>
          				<li class="mt-2">4th Girls</li>
          			</ul>
          		</p>
          		
                    <div class="mt-4">
                         <b class="mt-2">Rules: </b>

                         <ul>
                              <li class="mt-2">(2) 15 Minutes Running Clock Halves</li>
                              <li class="mt-2">CLOCK STOPS LAST 30 SECONDS OF FIRST HALF; LAST MINUTE OF 2nd HALF UNLESS A TEAM IS AHEAD BY 20 POINTS</li>
                              <li class="mt-2">1 - TIME OUT PER HALF (30 SECONDS) PER TEAM</li>
                              <li class="mt-2">2 - MINUTE HALFTIME</li>
                              <li class="mt-2">WARMUP TIMES ADJUSTED AS NEEDED TO STAY ON SCHEDULE  - BE READY TO PLAY 10 MINUTES BEFORE SCHEDULED GAME TIME</li>
                              <li class="mt-2">OVERTIME - ONE (1) MINUTE - 1ST OVERTIME - CLOCK STOPS LAST 30 SECONDS
2nd OVERTIME SUDDEN DEATH (1st TEAM TO SCORE) - ONLY 1 TIME OUT PER TEAM IN OVERTIME</li>
                              <li class="mt-2">7 TEAM FOULS - 1 AND 1 FREE THROW SHOTS</li>
                              <li class="mt-2">10 TEAM FOULS - 2 FREE THROW SHOTS</li>
                              <li class="mt-2">6th GRADE - NO PRESS IF UP BY 12</li>
                              <li class="mt-2">5th GRADE - M2M DEFENSE - MAY DOUBLE TEAM BALL - MAY PRESS LAST 5 MINUTES & OVERTIME UNLESS UP 
BY 12 POINTS - FREE THROW SHOOTERS WILL SHOOT FROM STANDARD LINE - SHOOTER MAY STEP OVER LINE 
ON SHOT BUT MAY NOT GO AFTER THE REBOUND - CAN REBOUND BALL THAT BOUNCES TO SHOOTER</li>
                              <li class="mt-2">4th GRADE - M2M DEFENSE - MAY DOUBLE TEAM BALL - MAY PRESS LAST 2 MINUTES & OVERTIME UNLESS UP 
BY 12 POINTS - FREE THROW SHOOTERS WILL SHOOT FROM THE TAPED SPOT ON FLOOR - SHOOTER MAY NOT 
STEP OVER THE LINE ON FT SHOT</li>
                              <li class="mt-2">PLEASE CLEAN BENCH AREA AFTER YOUR GAME IS OVER</li>
                              <li class="mt-2">1st TEAM PLAQUES - 1st AND 2nd PLACE MEDALS (MAXIMUM 10 PER TEAM)</li>
                              <li class="mt-2">TIEBREAKER - 1.) BEST RECORD  -- HEAD TO HEAD -- FEWEST POINTS ALLOWED</li>
                         </ul>

                    </div>
          		<div class="flex flex-col mx-auto md:flex-row mt-2">
	          		<div class="mx-4 my-4 rounded shadow-lg md:w-64">
	          			<div class="items-center flex flex-row bg-navy-lighter px-4 py-4 text-white">
	          				<h2> Form </h2>
	          			</div>
	          			<p class="mt-4 px-4 py-4"><a href="https://res.cloudinary.com/dblyrab9o/image/upload/v1546629032/napyouthbball/files/GrandCanyonShootoutTourney.pdf" class="no-underline text-grey-darker">Printable Form   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="15" height="15"><path fill="#2D4059" d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg></a> </p>
	          		</div>
				</div>
          	</div>
          </div>
@endsection