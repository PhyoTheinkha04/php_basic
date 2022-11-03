<?php
  function doit(){
    echo "I am doit function";
  }
  $var = "dit";

  $bol = function_exists($var);

  if ($bol) {
     $var();
  }else{
    echo "no function with this name";
  }