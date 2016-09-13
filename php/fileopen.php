<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("pictures/surya.png"));
fclose($myfile);
?>