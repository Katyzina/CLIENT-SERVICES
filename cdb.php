<html>

<head>

<title>Создаем базу данных</title>

</head>

<body>

<?

mysql_connect("localhost","root");

mysql_query("CREATE DATABASE PhoneDB");

@mysql("PhoneDB", "create table MainTable(Phone text, Sname text, Street text, Home text)");

mysql_close();

echo "<br><br><div align=center><font face=Arial size=2><b>База PhoneDB была успешно создана</b></font></div>";

?>

</body>

</html>