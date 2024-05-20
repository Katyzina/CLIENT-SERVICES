<html>
<head>
<title>Добро пожаловать в БД "Телефонная книга"</title>
</head>
<body>
<?
Error_Reporting(E_ALL & ~E_NOTICE);
If($cmdPost!=""){
$strSost = 'Данные в память отправленны';
$strSQL = "insert into telephone directory(Users, Telephone, Adress) values('".$txtTelephone."'".", '".$txtUsers."', "."'".$txtAdress."')";
mysql_connect("localhost","root");
mysql_select_db("Telephone directory");
mysql_db_query("Telephone directory", $strSQL);
mysql_close();
$txtTelephone = '';
$txtUsers = '';
$txtAdress = '';
}
else {
$strSost = 'В памяти ничего нет';
}
If($cmdClear!=""){
$txtTelephone = '';
$txtUsers = '';
$txtAdress = '';
}
?>
<div align=center><font face=Arial size=3><b>База Данных "Телефонная книга"</b></font><br>
<form action="add_rec.php" method=post>
<table border=1 align=center bordercolor=000000>
<tbody>
<tr>
<td align=center valign=middle><font face=Arial size=2><b>НОМЕР ТЕЛЕФОНА</b></font></td>
<td align=center valign=middle><font face=Arial size=2><b>ФАМИЛИЯ, ИМЯ, ОТЧЕСТВО</b></font></td>
<td align=center valign=middle><font face=Arial size=2><b>УЛИЦА</b></font> </td>
</tr>
<tr>
<td align=center valign=middle><input type=text name=txtTelephone size=30 maxlength=30 value="<>"></td>
<td align=center valign=middle><input type=text name=txtUsers size=50 maxlength=50 value="<>"></td>
<td align=center valign=middle><input type=text name=txtAdress size=25 maxlength=25 value="<>"></td>

</tr>
</tbody>
</table>
<br><br>
<div align=center>
<input type=submit name=cmdPost value="Отправить">
<input type=submit name=cmdClear value="Очистить"><br><br>
</div>
</form>
</body>
</html>