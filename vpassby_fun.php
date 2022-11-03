<?php

$age = 20;

function myfunc($age){
  $age = 60;
  echo $age;
}

myfunc($age);
echo "<br>";
echo  $age;

?>