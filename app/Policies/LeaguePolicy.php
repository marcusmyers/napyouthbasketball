<?php

namespace App\Policies;

use App\User;
use App\League;
use Illuminate\Auth\Access\HandlesAuthorization;

class LeaguePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasRole('super_administrator');
    }
    /**
     * Determine whether the user can view the league.
     *
     * @param  \App\User  $user
     * @param  \App\League  $league
     * @return mixed
     */
    public function view(User $user, League $league)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can create leagues.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can update the league.
     *
     * @param  \App\User  $user
     * @param  \App\League  $league
     * @return mixed
     */
    public function update(User $user, League $league)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can delete the league.
     *
     * @param  \App\User  $user
     * @param  \App\League  $league
     * @return mixed
     */
    public function delete(User $user, League $league)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can restore the league.
     *
     * @param  \App\User  $user
     * @param  \App\League  $league
     * @return mixed
     */
    public function restore(User $user, League $league)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can permanently delete the league.
     *
     * @param  \App\User  $user
     * @param  \App\League  $league
     * @return mixed
     */
    public function forceDelete(User $user, League $league)
    {
        return $user->hasRole('super_administrator');
    }
}
