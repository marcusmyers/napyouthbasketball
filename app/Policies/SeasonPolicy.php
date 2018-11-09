<?php

namespace App\Policies;

use App\User;
use App\Season;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeasonPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasRole('super_administrator');
    }
        
    /**
     * Determine whether the user can view the season.
     *
     * @param  \App\User  $user
     * @param  \App\Season  $season
     * @return mixed
     */
    public function view(User $user, Season $season)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can create seasons.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can update the season.
     *
     * @param  \App\User  $user
     * @param  \App\Season  $season
     * @return mixed
     */
    public function update(User $user, Season $season)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can delete the season.
     *
     * @param  \App\User  $user
     * @param  \App\Season  $season
     * @return mixed
     */
    public function delete(User $user, Season $season)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can restore the season.
     *
     * @param  \App\User  $user
     * @param  \App\Season  $season
     * @return mixed
     */
    public function restore(User $user, Season $season)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can permanently delete the season.
     *
     * @param  \App\User  $user
     * @param  \App\Season  $season
     * @return mixed
     */
    public function forceDelete(User $user, Season $season)
    {
        return $user->hasRole('super_administrator');
    }
}
