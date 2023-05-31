﻿<?php
$vgb=0;
while (file_exists($target_file)) {
$target_file = $target_dir . $vgb . basename($_FILES["fileToUpload"]["name"]);
$vgb=$vgb+1;
}
?>
