<?php
$cookie_name = "CS";
$cookie_value = "Color Stones";
setcookie($cookie_name, $cookie_value ,time()+3600,'/');

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named " . $cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }
?>