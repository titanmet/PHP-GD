<?php
 
// Устанавливаем тип изображения
header("Content-type: image/png"); 

// Создаем новую картинку 300x200
$pic = ImageCreateTrueColor(300, 200); 

// Устанавливаем красный цвет
$red = ImageColorAllocate($pic, 0, 0, 255);

// Заливаем область выбранным цветом
ImageFill($pic, 0, 0, $red);

// Передаем изображение в браузер
ImagePNG($pic); 
 
// Освобождаем память
ImageDestroy($pic); 
 
?>
