<?php

use App\User;

if (! function_exists('anonymous')) {
    /**
     * Return anonymous user.
     *
     * @return User::class
     */
    function anonymous()
    {
        return User::findOrFail(1000);
    }
}
