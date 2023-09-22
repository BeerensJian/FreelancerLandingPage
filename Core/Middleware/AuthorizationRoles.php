<?php

namespace Core\Middleware;
enum AuthorizationRoles: string
{
    case ADMIN = "admin";
    case GUEST = "guest";
}