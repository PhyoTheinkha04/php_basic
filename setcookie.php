<?php

function mySetCookie(){
  setcookie('LL','Lucid Love',time()+3600,'/');
 }
 function myGetCookie() {
    if (isset($_COOKIE['Lk'])) {
        echo $_COOKIE['LL'];
    }else {
        echo "there is no cookie set with that key";
    }
       
 }
 //mySetCookie();
 myGetCookie();
