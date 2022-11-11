<?php
 
 
session_start();
 if (isset($_POST['submit'])) {
    $user = $_POST['name'];
    $pass = $_POST['password'];
    
    if ($user == "PTK"  &&  $pass == "123") {
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
         header("location: member.php");
    } else {
        echo "you are not vlid User";
    }
    
 }
 include "link.php";
?>
<h1>main page</h1>
<form action="<?php $_PHP_SELF; ?>" method="post">
    <input type="text" name="name" placeholder="username"><br><br>
    <input type="password" name="password"><br><br>
    <button type="submit" name="submit">login</button>
</form>
