<?php

namespace App\Policies;

use App\User;
use App\Player;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlayerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the player.
     *
     * @param  \App\User  $user
     * @param  \App\Player  $player
     * @return mixed
     */
    public function view(User $user, Player $player)
    {
        if ($user->hasRole('coach')) {
            return $user->team->id == $player->team->id;
        } else {
            return $user->hasRole('super_administrator');
        }
    }

    /**
     * Determine whether the user can create players.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can update the player.
     *
     * @param  \App\User  $user
     * @param  \App\Player  $player
     * @return mixed
     */
    public function update(User $user, Player $player)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can delete the player.
     *
     * @param  \App\User  $user
     * @param  \App\Player  $player
     * @return mixed
     */
    public function delete(User $user, Player $player)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can restore the player.
     *
     * @param  \App\User  $user
     * @param  \App\Player  $player
     * @return mixed
     */
    public function restore(User $user, Player $player)
    {
        return $user->hasRole('super_administrator');
    }

    /**
     * Determine whether the user can permanently delete the player.
     *
     * @param  \App\User  $user
     * @param  \App\Player  $player
     * @return mixed
     */
    public function forceDelete(User $user, Player $player)
    {
        return $user->hasRole('super_administrator');
    }
}
