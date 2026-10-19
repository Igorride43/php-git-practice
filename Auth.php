<?php

require_once 'User.php';

class Auth
{
    public function validateEmail(User $user): bool
    {
        return filter_var($user->email, FILTER_VALIDATE_EMAIL) !== false;
    }
}