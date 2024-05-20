<?php
session_start();

if (isset($_POST['login']) && isset($_POST['password']))
{
    $login = htmlspecialchars($_POST['login']);
    $password = md5(htmlspecialchars($_POST['password']));
    $file = fopen('D:/Учеба/4 семестр/РКСП/Лабораторная работа №4/users.txt','r');

    $isfind = false;
    while(!feof($file))
    {
        $user = fgets($file);
        $userarray = explode(':',$user);
        if (trim(htmlspecialchars($userarray[0])) == $login && (trim(md5(htmlspecialchars($userarray[1]))) == $password || isset($_POST['key']) && trim($userarray[2]) == md5($_POST['key'])))
        {
            $_SESSION['passmd5'] = trim($userarray[1]);
            $isfind = true;
            break;
        }


    }
    fclose($file);

    if (!$isfind)
        echo "Error in login or password <br />";
}

if (isset($_SESSION['passmd5']))
{
    $file = fopen('D:/Учеба/4 семестр/РКСП/Лабораторная работа №4/users.txt','r');

    while(!feof($file))
    {
        $user = fgets($file);
        $userarray = explode(':',$user);

        if (trim($userarray[1]) == $_SESSION['passmd5'])
        {

            echo " <br />"."You was authorized <br />";
            echo "<a href='PassPage.php'>click</a>";
            break;

        }
    }
    fclose($file);
}
