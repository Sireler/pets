<?php


namespace App\Role;

use App\User;

/**
 * Class RoleChecker
 * @package App\Role
 */
class RoleChecker
{
    /**
     * @param User $user
     * @param string $role
     * @return bool
     */
    public function check(User $user, string $role)
    {
        if ($user->hasRole(UserRole::ROLE_ADMIN)) {
            return true;
        }

        return $user->hasRole($role);
    }
}
