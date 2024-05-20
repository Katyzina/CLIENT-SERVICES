
<?php
$records = simplexml_load_file("guest.xml");
foreach ($records -> record as $record)
{
    echo "Имя: ".$record -> name."<br>";
    echo "Дата: ".$record -> date."<br>";
    echo "Текст: <br>".$record -> text."<br><br>";
}
?>
<h2>Добавление записи</h2>
<form action="6.php" method=POST>
    Имя
    <br/><input type=text name="name"/>
    <br/>Текст<br/>
    <textarea name="comment" cols=32 rows=5></textarea><br/>
    <input type=submit value="Отправить"/>
</form>
