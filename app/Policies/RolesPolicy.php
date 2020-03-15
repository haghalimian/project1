<?php

namespace App\Policies;



use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolesPolicy
{
    use HandlesAuthorization;


    public function manager()
    {
        $users = auth()->user()->roles()->get();
        foreach ($users as $user)
        {
            $role = $user ->role;
        }

        return $role == 'manager';

    }

    public function admin()
    {
        $users = auth()->user()->roles()->get();
        foreach ($users as $user)
        {
            $role = $user ->role;
        }

        return $role == 'admin';

    }

    public function member()
    {
        $users = auth()->user()->roles()->get();
        foreach ($users as $user)
        {
            $role = $user ->role;
        }
        return $role == 'member';

    }

}
