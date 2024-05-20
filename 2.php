<?php
$file1 = file("test1.txt");
$file2 = file("test2.txt");
$file3 = file("test3.txt");
for ($i=0;$i<count($file1);++$i)
{
    echo $file1[$i]."<br>";
    echo $file2[$i]."<br>";
    echo $file3[$i]."<br>";
}

?>

