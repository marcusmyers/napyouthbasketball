<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Game' => 'App\Policies\GamePolicy',
        'App\Location' => 'App\Policies\LocationPolicy',
        'App\League' => 'App\Policies\LeaguePolicy',
        'App\Season' => 'App\Policies\SeasonPolicy',
        'App\Team' => 'App\Policies\TeamPolicy',
        'App\User' => 'App\Policies\UserPolicy',
        'App\Player' => 'App\Policies\PlayerPolicy',
        'App\Video' => 'App\Policies\VideoPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
