<?php

$ary = array(
  "name"=>"Phyo Theinkha",
  "age" =>18, 
  "subject" => "c++, Python, Assembly",
  "address" => "mars",
  "married" => "nope"

);
$str = "";
$str .="<coder>";
foreach ($ary as $key => $val) {
    $str.="<".$key.">";
    $str.=$val;
    $str.="</".$key.">";
}
$str .="</coder>";
$handler  = fopen("data.xml",'w');
fprintf($handler,"%s",$str);
