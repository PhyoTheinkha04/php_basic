<?php

 if (isset($_POST['submit'])) {
    foreach ($_FILES['files']['tmp_name'] as $key => $value) {
        echo $_FILES['files']['name'][$key] . "<br>";
        echo $_FILES['files']['tmp_name'][$key] . "<br>";
        echo $_FILES['files']['size'][$key] . "<br>";
        move_uploaded_file($_FILES['files']['tmp_name'][$key],
        'uploads/' . $_FILES['files']['name'][$key]);
    }
    
 }

 ?>
<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <button type="submit" name="submit">Upload</button>
</form>