<?php

$str = "It is during our darkest moments that we must focus to see the light";

//$var = str_word_count($str);
//$var = substr($str,20,strlen($str));
$var = chunk_split($str,5,"-");
echo $var;
