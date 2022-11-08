<?php

if (isset($_POST['submit'])) {
   $uname = $_POST['username'];
   $email = $_POST['email'];
   $pass = $_POST['password'];

   echo $uname . " = "  . $email . " = " . $pass;

   $gender = $_POST['gender'];
   echo $gender;

   $subjects = $_POST['subjects'];
   foreach ($subjects as $subjects) {
      echo $subjects;
   }


   //echo $_FILES['files']['tmp_name'][0] . "<br>";
   //echo $_FILES['files']['name'][1] . "<br>";

   foreach ($_FILES['files']['tmp_name'] as $key => $value) {
      move_uploaded_file($_FILES['files']['tmp_name'][$key],
        'uploads/' . $_FILES['files']['name'][$key]);
    }
 }
?>
<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
   <input type="text" name="username" placeholder="Username"><br><br>
   <input type="email" name="email" placeholder="Email"><br><br>
   <input type="password" name="password"><br><br>
   <h3>Choose Gender</h3>
   male:<input type="radio" name="gender" value="Male"><br><br>
   female: <input type="radio" name="gender" value="Female"><br><br>
   <h3>Choose Subject</h3>
   <input type="checkbox" name="subjects[]" value="PHP">
   <input type="checkbox" name="subjects[]" value="Ajax">
   <input type="checkbox" name="subjects[]" value="JSON">
   <input type="checkbox" name="subjects[]" value="MySQL"><br><br>
   <input type="file" name="files[]" multiple><br><br>
   <button type="sumit" name="submit">Register</button>

</form>