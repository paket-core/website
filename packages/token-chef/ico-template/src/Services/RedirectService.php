<?php

namespace TokenChef\IcoTemplate\Services;

use TokenChef\IcoTemplate\Models\User;

class RedirectService
{

    /**
     * @param User $user
     * @return string
     */
    public static function get_redirect($user)
    {
        if (!$user) {
            return '/login';
        }
        if ($user->role === StaticArray::ROLE_ADMIN) {
            return '/my-account';
        }
        return '/my-account';
    }

}