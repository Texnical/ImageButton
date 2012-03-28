<?php
$value = file_get_contents("value.txt");
$value = $value + 1;
file_put_contents("value.txt", $value);
?>
