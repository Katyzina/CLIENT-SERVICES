<?php

function stringCheck ($field_value, $regexp, $field_name)
{
    $str = "";
    if (isset($field_value)) {
        $match = [];
        if (preg_match($regexp, $field_value, $match))
            $str = $field_name . ": " . $match[0] . "<br>";
        else
            $str = "Неверно заполнено поле: " . $field_name . "<br>";
    }
    else
        $str = "Пустое поле: " . $field_name . "<br>";

    return $str;
}

$str = "";

$regexp ="/^[a-zA-Z]*$/";
$str .= stringCheck($_POST["first_name"],$regexp,"Имя");
$str .= stringCheck($_POST["last_name"],$regexp,"Фамилия");
$str .= stringCheck($_POST["middle_name"],$regexp,"Отчество");

$regexp = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
$str .= stringCheck($_POST["email"],$regexp,"E-mail");

$regexp = "/^((\+7|7|8)+([0-9]){10})$/";
$str .= stringCheck($_POST["phone"],$regexp,"Phone");

echo $str; // выводим сообщение на экран

?>
