<?php
 $var = 20;
 function doit(){
    global $var;
    echo $var;
 }
  doit();
  ?>