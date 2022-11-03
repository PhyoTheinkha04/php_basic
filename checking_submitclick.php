<?php
 
 if(isset($_GET['submit'])){
    echo "submit buttom is clicked";
 }
?>
<form action="<?php $_PHP_SELF ?>" method="get"> 
     <input type="text" name="username">
     <button type="submit" name="submit">Register</button>
</form>