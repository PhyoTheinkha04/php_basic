<?php

 if (isset($_GET['submit'])) {
      $uname = $_GET['username'];
      echo "your username is ". $uname;
 }
 ?> 
 <form action="<?php $_PHP_SELF ?>" method="get"> 
     <input type="text" name="username">
     <button type="submit" name="submit">Register</button>
</form>