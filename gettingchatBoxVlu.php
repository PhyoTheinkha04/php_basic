<?php
  if (isset($_POST['submit'])) {
        $colors = $_POST['color'];
        
        foreach ($colors as $color) {
            echo $color . "<br>";
        }
  }
?>

<form action="<?php $_PHP_SELF ?>" method="post" >
 <input type="checkbox" name="color[]" value="red"> Red <br><br>
 <input type="checkbox" name="color[]" value="green"> green <br><br>
 <input type="checkbox" name="color[]" value="blue"> blue <br><br>
 <input type="checkbox" name="color[]" value="Navy Blue"> Navy Blue <br><br>
 <input type="checkbox" name="color[]" value="Rain Bow"> Rain Bow <br><br>
 <input type="submit" name= "submit" value="choose">

</form>