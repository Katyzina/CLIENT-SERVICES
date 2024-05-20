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

?>

<br />
<form action="PassScript.php" method="POST">
    Password
    <input name="password" type="password" />
    <br />
    Password confirmation
    <input name="confirmation" type="password" />
    <br />
    <input name="submit" type="submit" value="Change" />
</form>
