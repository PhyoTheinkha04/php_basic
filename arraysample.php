<?php 
   $name = array();
   $name[1] = "Bo BO"  ;
   $name[2] = "Bo Lay" ;
   $name[3] = "Soe Lwin";
   $name[4] = "Mg Aung";
   $name[5] = "Mg Lay";
   echo "<h3 style='fount-weight: bold; font-size: 42px; color:#800080;box-shadow: 1px 1px 4px 1px #aaaaaa; width: 172px;width: 63%;
   '>this for invoking one emement from array</h3>";

   echo  "<h4 style='fount-weight: bold; font-size: 42px; color:#800080;box-shadow: 1px 1px 4px 1px #aaaaaa;width: 16%;
   '>$name[4];</h4>";

   echo "<h4 style='fount-weight: bold; font-size: 42px; color:#800080;box-shadow: 1px 1px 4px 1px #aaaaaa;width: 20%;
   '>this for count</h4>";

   echo  "<h4 style='fount-weight: bold; font-size: 42px; color:#800080;box-shadow: 1px 1px 4px 1px #aaaaaa;width: 172px;
   '>".count($name)."</h4>";
?>