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

You successfully passed<br />
<form action="Exit.php" method="POST">
    <input name="submit" type="submit" value="Exit" />
</form>

<form action="PassChange.php" method="POST">
    <input name="submit" type="submit" value="Change password" />
</form>
