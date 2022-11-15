<?php

$file = "she.json";
$handler = fopen($file,'r');
$json = fread($handler,filesize($file));

$ary = json_decode($json);

foreach ($ary as $key => $vals) {
    foreach ($vals as $key => $val) {
       echo "key is => " . $key . "and value is =>" . $val. "<br>";
    }
}