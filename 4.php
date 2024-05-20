<?php
if (isset($_POST["name"]) && isset($_POST["comment"]))
{
    $records = simplexml_load_file("guest.xml");
    $record = $records -> addChild("record");
    $record ->addChild("name",$_POST["name"]);
    $record ->addChild("date",date("d-m-Y h:i:s"));
    $record ->addChild("text",$_POST["comment"]);

    $records ->asXML("guest.xml");

    echo "Запись успешна сделана";
}
else
    echo "Ошибка записи,так как одна из строчек пуста";

?>
