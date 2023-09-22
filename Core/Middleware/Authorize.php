<?php

namespace Core\Middleware;

use Core\Response;

class Authorize {
    // this function is responsible for creating a function
    // that function when executed will check the role of the user and compare it to whats allowed
    // if it is allowed return, else redirect/error to another page
    public static function allow(AuthorizationRoles $key) : callable
    {

        return function() use ($key){

            $userRole = $_SESSION['user']['role'] ?? AuthorizationRoles::GUEST->value;
            if ($key->value === $userRole) {
                return;
            } else {
                abort(Response::FORBIDDEN);
            }
        };
    }

}
