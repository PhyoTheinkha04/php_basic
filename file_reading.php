<?php

  $file = "myTestfile.txt";
  $handler = fopen($file , mode:'r');
  $size = filesize($file);
  $data = fread($handler,$size);
  echo $data;
  
?>