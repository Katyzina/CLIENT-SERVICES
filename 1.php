<?php
// Задаем количество секторов
$sec = array(0,0,300,300);
$sum = array_sum($sec);
for($i = 0; $i < count($sec); $i++) {
  $sec[$i] = intval( round($sec[$i]*360/$sum) );
}
// Создаем пустое изображение
$img =  imagecreatetruecolor(500,500);
// Определение белого цвет на изображении
$white = imagecolorallocate($img, 255, 255, 255); 
imagefill($img, 0, 0, $white);
// Переменные $cx и $cy определяют центр круговой диаграммы
$cx = $cy = 100;
// Переменные $w и $h определяют ширину и высоту диаграммы
$w = $h = 200;
$start = 0;
foreach ($sec as $value) {
  // Формируем случайный цвет для каждого сектора
  $color = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)); 
  // Определяем конечный угол сектора
  $angle_sector = $start + $value;
  // Отрисовываем сектор
  imagefilledarc($img, $cx, $cy, $w, $h, $start, $angle_sector, $color, IMG_ARC_EDGED);
  // Увеличиваем значение начального угла сектора
  $start += $value;
}
// Вывод изображения в окно браузера
header ("Content-type: image/gif"); 
imagegif($img);                      