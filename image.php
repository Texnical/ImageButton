<?php
define('WIDTH', 0);
define('HEIGHT', 1);

$dimensions = array(221, 106);

$img = imagecreatefrompng('heart_blank.png');
imagealphablending($img, true);
imagesavealpha($img, true);
imageantialias($img, true);

$offset = array(82, 49);
$value = file_get_contents("value.txt");
$color = imagecolorallocate($img, 0, 0, 0);
$font = 'arial.ttf';
$fontsize = 24;

imagettftext($img, $fontsize, 0,
	$offset[WIDTH], $offset[HEIGHT] + $fontsize,
	$color, $font, $value);

imagepng($img);
imagedestroy($img);
?>
