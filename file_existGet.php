<?php

// function readMyfile($filename){
//   if (file_exists($filename)) {
//        $handler = fopen($filename,mode:'r');
//        $size = filesize($filename);
//        $data = fread($handler,$size);
//        return $data;
//   } else {
//      echo "file not found";
//   }

// }
function readMyfile($filename){
    if (file_exists($filename)) {
      $data = file_get_contents($filename);
      return $data;
    }else {
        echo "not found";
    }
   
}

echo readMyfile( filename: "love.txt");