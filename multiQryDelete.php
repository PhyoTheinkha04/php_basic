<?php
 
 define("DB_HOST","localhost");
 define("DB_NAME","alina");
 define("DB_USER","root");
 define("DB_PASS","");

 function dbConnect(){
   $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   if (mysqli_connect_errno() > 0) {
     die("Connection Fail");
   }else{
    return $db;
   }
 }

 function executeQuery($qry){
    $db = dbConnect();
    $result =  mysqli_query($db,$qry);

     if (mysqli_num_rows($result)>0) {

         foreach ($result as $item) {
        echo "Id is =>". $item["id"]."<br>";
        echo "Name is =>". $item["name"]."<br>";
        echo "Email is =>". $item["email"]."<br>";
        echo "Password is =>". $item["password"]."<br>";
        echo "<hr>";
         }
     }

    echo mysqli_num_rows($result);
    errDubbger($result);
 }

 function retrieveSingleData($qry){ 
     //$qry = "SELECT * FROM users WHERE id= $id";
     $db = dbConnect();
     $result = mysqli_query($db,$qry);
     if (mysqli_num_rows( $result)>0) {
        foreach ($result as $data) {
          echo "Id is" . $data["id"] . "<br>";
          echo "Name is" . $data["name"] . "<br>";
          echo "Email is" . $data["email"] . "<br>";
          echo "Password is" . $data["password"] . "<br>";
          echo "Extra is" . $data["extra"] . "<br>";
          echo "<hr>";
        }
     }
} 

function insertData($qry){
      $db = dbConnect();
      $result = mysqli_query($db,$qry);
      echo $result > 0 ? "Data Insert Successfully" . mysqli_insert_id($db) : "Data Insert Fail";
}

function insertUniqueData($name,$email,$pass){
      $qry = "SELECT * FROM users WHERE name='$name'";
      $db = dbConnect();
      $ret = mysqli_query($db,$qry);
      if(mysqli_num_rows($ret) > 0){
        echo "User name is already in use!";
      }else {
        $qry = "INSERT INTO users(name,email,password)
                VALUES 
                ('$name','$email','$pass')";
        $result = mysqli_query($db,$qry);
        echo $result > 0 ? "Data Insert Successfully" . mysqli_insert_id($db) : "Data Insert Fail!"; 
      }
     
}

function passGen($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, $pass);
    return $pass;
}

function errDubbger($data){
    echo "<pre>" . print_r($data, true) . "</pre>";
}

function multiInsertData($qry){
    $db = dbConnect();
    $result = mysqli_multi_query($db,$qry);
    echo $result ? "Data Insert Successfully" : "Data insert Fail";
}

function delteData($id){
    $qry = "DELETE FROM users WHERE id=$id";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result ? "Deleted" : "Delete Fail!";

}

function updateData($qry){
  $db = dbConnect();
  $result = mysqli_query($db,$qry);
  echo $result ? "Data Update Successfully" : "Data Update Fail!";
}

  $qry = "SELECT * FROM users";
  $extra = NULL;
  $pass = passGen(123);


  //$qry = "SELECT * FROM users WHERE id!= 4";
  //$qry = "INSERT INTO users  VALUES (0,'zuxyy','zuxxy@gmali.com','$pass','')";

  $qry = "INSERT INTO users VALUE (0,'Tun Tun' , 'tuntun@gmail.com' , '$pass' , '');";
  $qry .= "INSERT INTO users VALUE (0,'Su Su' , 'susu@gmail.com' , '$pass' , '');";
  $qry .= "INSERT INTO users VALUE (0,'Tun Tun' , 'uhla@gmail.com' , '$pass' ,'');";
  $qry .= "INSERT INTO users VALUE (0,'Daw Mya' , 'dawmya@gmail.com' , '$pass' ,'');";
  
  
  $qry = "SELECT * FROM users";
  $qry = "UPDATE users SET name ='Ma Mya' WHERE name='zuxxy'";
  updateData($qry);