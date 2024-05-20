<?php
$filename = 'dia.txt';
$text = file_get_contents($filename);
$sec = $filename;
for($i = 0; $i < count($sec); $i++) {
  $sec[$i] = intval( round($sec[$i]*360/$sum) );
}
$img =  imagecreatetruecolor(500,500);
$white = imagecolorallocate($img, 255, 255, 255); 
imagefill($img, 0, 0, $white);
$cx = $cy = 100;
$w = $h = 200;
$start = 0;
foreach ($sec as $value) {
  $color = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)); 
  $angle_sector = $start + $value;
  imagefilledarc($img, $cx, $cy, $w, $h, $start, $angle_sector, $color, IMG_ARC_EDGED);
  $start += $value;
}
header ("Content-type: image/gif"); 
imagegif($img);                      
?>