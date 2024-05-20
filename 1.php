<?php
if (isset($_POST["name"]))
{
    $name = $_POST["name"];
    if (!file_exists("/".$name))
    {
        mkdir("/".$name);
        echo "Каталог успешно создан";
    }
    else
        echo "Каталог уже существует";
}
else
    echo "Пустое имя"; 
?>
