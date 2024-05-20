<?php
$file = file("Katyzina.txt");
$repeats = array();
for ($i = 0; $i<count($file);$i++)
{
    $repeats[$file[$i]] = 0;
}
foreach ($repeats as $key => $value)
{
    foreach ($file as $string)
    {
        if ($key == $string)
            $repeats[$string]++;
    }
}
foreach ($repeats as $key => $value)
    {
    echo '<tr>';
	echo "<td align='center'>$value</td>";
    echo "<td align='center'>$key</td>";
    echo '</tr>';
    }
?>
