<?php

function getUsersList ($login, $password): bool
{
    $users = require __DIR__ . '/users.php';
   foreach ($users as $user) {
    if ($user['login'] === $login
    && $user['password'] === $password
    ) {
        return true;
    }
}
return false;
}

function getCurrentUser()
{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCookie = $_COOKIE['password'] ?? '';
    if (getUsersList($loginFromCookie, $passwordFromCookie)){
        return $loginFromCookie;
    }
    return null;
}
