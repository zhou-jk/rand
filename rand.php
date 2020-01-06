<?php
$img_array = glob("image/*.{gif,jpg,png,bmp}",GLOB_BRACE);
$img = array_rand($img_array);
header("location:$_fullUrl$img_array[$img]"); 
?>
