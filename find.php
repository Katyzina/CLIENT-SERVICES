<HEAD>
<TITLE>Добро пожаловать в БД "Телефонная книга"</TITLE>
</HEAD>
<BODY>
<DIV align=center><font face=Arial size=3><B>База Данных "Телефонная книга"</B></FONT><BR>
<FONT face=Arial size=2>Введите данные для поиска</FONT><BR>
</DIV>
<FORM action="find.php" method=post>
<TABLE border=1 align=center bordercolor=000000>
<TBODY>
<TR>
<TD align=center valign=middle><FONT face=Arial size=2><B>НОМЕР ТЕЛЕФОНА</B> </FONT></TD>
<TD align=center valign=middle><FONT face=Arial size=2><B>ФАМИЛИЯ, ИМЯ, ОТЧЕСТВО</B></FONT></TD>
<TD align=center valign=middle><FONT face=Arial size=2><B>УЛИЦА</B></FONT> </TD>
</TR>
<TR>
<TD align=center valign=middle><INPUT type=text name=txtPhone size=30 maxlength=30 value=""></TD>
<TD align=center valign=middle><input type=text name=txtSname size=50 maxlength=50 value=""></TD>
<TD align=center valign=middle><input type=text name=txtStreet size=25 maxlength=25 value=""></TD>
</TR>
</TBODY>
</TABLE>
<BR><BR>
<DIV align=center>
<INPUT type=submit name=cmdPost value="Искать">
<INPUT type=submit name=cmdClear value="Очистить"><BR><BR>
<?
Error_Reporting(E_ALL & ~E_NOTICE);
If($cmdPost!=""){
$strSQL = "select * from MainTable ";
$strSQLW ="";
If ($txtPhone!=""){
$strSQLW = $strSQLW." (Phone Like '".$txtPhone."%') ";
}
If ($txtSname!=""){
if ($strSQLW!="") {
$strSQLW=$strSQLW." and ";
}
$strSQLW = $strSQLW." (Sname Like '".$txtSname."%') ";
}
If ($txtStreet!=""){
if ($strSQLW!="") {
$strSQLW=$strSQLW." and ";
}
$strSQLW = $strSQLW." (Street Like '".$txtStreet."%') ";
}
If ($strSQLW!=""){
$strSQL = $strSQL." where ".$strSQLW;
}
mysql_connect(localhost);
mysql_select_db("PhoneDB");
$r=mysql_db_query("PhoneDB", $strSQL);
if (mysql_numrows($r)>0){
echo "<div align=center><font face=Arial size=2>В результате поиска найдена(ы) запись(и):
Катызина Анастасия Андреевна 8-922-485-60-73, проживающая по адресу Академика Волгина, 4 </font>\n</div>";
}
else{
echo "<div align=center><font face=Arial size=2>В результате поиска запись(и) не найден(ы):</font>\n</div>";
}
for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);
echo "<div align=center><font face=Arial size=2><b>$f[Sname]</b> проживающий по адресу <b>$f[Street], номер телефона <b>$f[Phone]</b>.<br><br>\n</div>";
}
mysql_close();
$strSost = $strSQL;
$txtPhone = '';
$txtSname = '';
$txtStreet = '';
}
else {
$strSost = 'В памяти ничего нет';
}
If($cmdClear!=""){
$txtPhone = '';
$txtSname = '';
$txtStreet = '';
}
?>
</DIV>
</FORM>
</BODY>
</HTML>