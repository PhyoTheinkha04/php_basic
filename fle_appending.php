<?php

$file = "Mine.txt";
$h = fopen($file,mode:'a');
fwrite($h , " money tree");
fclose($h);
