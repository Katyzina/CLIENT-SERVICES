<?php
for ($i=0; $i<100; $i++)
{
    for ($j = 10; $j <=23; $j++)
    {
        if ($j<=15 && $j>=12)
		{
		 echo "$j $j ";
		}
	else if ($j!=16)
		{
        echo "$j ";
		}
    }
    echo "<br>";
}
?>
