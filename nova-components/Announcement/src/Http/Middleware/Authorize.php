<?php

namespace Marcusmyers\Announcement\Http\Middleware;

use Marcusmyers\Announcement\Announcement;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(Announcement::class)->authorize($request) ? $next($request) : abort(403);
    }
}
