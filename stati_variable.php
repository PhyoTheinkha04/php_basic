<?php
 function myfun(){
 STATIC $var = 0;
 $var ++;
 echo $var;
 }
 myfun();
 echo "<br>" ;
 myfun();
 echo "<br>" ;
 myfun();
 echo "<br>" ;
 myfun();
 echo "<br>" ;