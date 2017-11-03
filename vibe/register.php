<?php
  require 'db.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->execute(array(':username' => $username));
    $response = $stmt->fetchObject();
    if(empty($response)){
      $stmt = $conn->prepare("INSERT INTO user (name,username,password) VALUES(:name,:username,:password)");
      $data = array(
        ':name'=>$name,
        ':username'=>$username,
        ':password'=> $password
      );
      $stmt->execute($data);
      if($stmt->rowCount() ==1){
        echo "Registration Successful";
      }else{
        echo "Error";
      }
    }else{
      echo "User is exists";
    }

  }else{
    echo"GET request not allowed";
  }
 ?>
