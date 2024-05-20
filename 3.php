<?php
session_start();

if(!isset($_SERVER['PHP_AUTH_USER']))
// пользователь неизвестен
{
    Header("WWW-Authenticate: Basic realm=\"Admin Center\"");
    Header("HTTP/1.0 401 Unauthorized");
    exit();
}
else
// пользователь известен, неизвестен пароль
{
    // введенный пароль
    $password = $_SERVER['PHP_AUTH_PW'];

    if ($_SERVER['PHP_AUTH_USER']!='user' || $_SERVER['PHP_AUTH_PW']!=123)
    {
        Header("WWW-Authenticate: Basic realm=\"Admin Center\"");
        Header("HTTP/1.0 401 Unauthorized");
        exit();
    }
}
echo "Random";

unset($_GET['login']);
unset($_SERVER['PHP_AUTH_USER']);
unset($_SERVER['PHP_AUTH_PW']);
header('HTTP/1.0 401 Unauthorized');