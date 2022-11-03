<?php 

 $a = 20;
 $b = &$a;

 $b = 190;

 echo "a value is now" . $a;
 echo "<br>";
 echo "b value is now" . $b;