<?php

function createfile($filename){
   $h = fopen($filename,mode:'w');
   fclose($h);
}

function writeFile($filename,$data){
    $h = fopen($filename,mode:'w');
    fwrite($h,$data);
    fclose($h);
}
function appendFile($filename,$data){
    $h = fopen($filename, mode: 'a');
    fwrite($h,$data);
    fclose($h);
}
function readMyfile($filename){
  $h = fopen($filename,mode:'r');
  $size = filesize($filename);
  $data = fread($h ,$size);
  fclose($h);
  return $data;

}

echo readMyfile( filename:'love.txt');

?>