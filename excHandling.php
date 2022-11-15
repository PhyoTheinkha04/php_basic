<?php

 $file = "nah.txt";

 try{
    if (file_exists($file)) {
        echo "file exist";
    }else{
        throw new Exception("file not found!");
    }
 }catch(Exception $e){
    echo $e->getMessage();
 }

