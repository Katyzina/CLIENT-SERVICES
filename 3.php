<?php
$rows=$_POST["rows"];
$columns=$_POST["columns"];
echo '<html><body>';
echo '<table border="1" a="center">';
for ($i=1;$i<=$rows;$i++){
echo '<tr>';
for ($j=1;$j<=$columns;$j++)
	$result=$i*$j;
echo "<td a='center'>$i*$j=$result</td>";
{
echo "<td>1234</td>";
}
echo '</tr>';}
echo '</table>';
echo '</body></html>';
?>