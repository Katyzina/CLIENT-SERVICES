<?php
session_start();

if (!isset($_SESSION['passmd5']))
    header("Location: index.php");
else
{
    $file = fopen('D:/Учеба/4 семестр/РКСП/Лабораторная работа №4/users.txt','r');


    $isfind = false;
    while(!feof($file))
    {
        $user = fgets($file);
        $userarray = explode(':',$user);

        if (trim($userarray[1]) == $_SESSION['passmd5'])
        {
            $isfind = true;
            break;

        }
    }
    fclose($file);

    if (!$isfind)
        header("Location: index.php");
}

if (isset($_POST['password']) && isset($_POST['confirmation']) && $_POST['password'] == $_POST['confirmation'])
{
    $newpassword = $_POST['password'];

    $isfind = false;

    $fopen=@file("D:/Учеба/4 семестр/РКСП/Лабораторная работа №4/users.txt");
    foreach($fopen as $key=>$value)
    {
        $userarray = explode(':',$value);

        if($userarray[1] == $_SESSION['passmd5'])
        {
            // если нашли
            array_splice($fopen, $key, 1, $userarray[0].':'.$newpassword.':'.$userarray[2]); // заменили
        }
        $f=fopen("D:/Учеба/4 семестр/РКСП/Лабораторная работа №4/users.txt", "w"); // переписали файл
        for($i=0;$i<count($fopen);$i++)
        {
            fwrite($f,$fopen[$i]);
        }
        fclose($f);

    }
    echo "You successfully changed your password!";
}
else
{
    echo "Passwords don't match";
}
