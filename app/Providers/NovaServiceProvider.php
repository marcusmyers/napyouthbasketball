<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    protected function is_super_administrator()
    {
        Gate::define('viewAdminDashboard', function($user){
            return $user->hasRole('super_administrator');
        });
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return $user->hasRole('super_administrator') || $user->hasRole('coach');
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            (new \Tightenco\NovaGoogleAnalytics\PageViewsMetric)->canSee(function ($request) {
                return $request->user()->hasRole('super_administrator');
            }),
            (new \Tightenco\NovaReleases\LatestRelease)->canSee(function ($request) {
                return $request->user()->hasRole('super_administrator');
            }),
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            (new \Vyuldashev\NovaPermission\NovaPermissionTool)->canSee(function ($request) {
                return $request->user()->hasRole('super_administrator');
            }),
            (new \Tightenco\NovaReleases\AllReleases)->canSee(function ($request) {
                return $request->user()->hasRole('super_administrator');
            }),
            new \vmitchell85\NovaLinks\Links(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
