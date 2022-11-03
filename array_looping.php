<?php
   $champions = array("Zed", "Yasuo" , "Katarina" , "Lux" , "Kassadin");
   for ($i=0; $i < count($champions); $i++) { 
     echo $champions[$i] . "<br>";
   }
   
?>
<br>

<?php
 $i=0;
   $champions = array("Zed", "Yasuo" , "Katarina" , "Lux" , "Kassadin");
   while ($i < count($champions)) {
    echo $champions[$i] . "<br>";
    $i++;
   }
?> 

<br>

<?php
 $i=0;
  $champions = array("Zed", "Yasuo" , "Katarina" , "Lux" , "Kassadin");
  do {
  echo $champions[$i] . "<br>";
  $i++;
  } while ($i < count($champions));
?> 

<?php
 $ary = array( 
  array ( 1,2,3),
  array ( 4,5,6),
  array ( 7,8,9),
 );

 for($i=0; $i < count($ary) ; $i++) { 
    for ($j=0; $j < count($ary[$i]) ; $j++) { 
      echo $ary[$i][$j];
    }
    echo "<hr>";
    
  }
?>