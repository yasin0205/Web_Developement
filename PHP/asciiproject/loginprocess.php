<?php
session_start();
include('db.php');
$email1=$_POST['email'];
$password1=$_POST['password'];

$stmt = $dbcon->prepare('SELECT * FROM user_table WHERE email=:email');
$stmt->execute(array(':email' => $email1));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
if($stmt->rowCount() > 0){
if(password_verify($password1, $row['password'] ))
{
 session_regenerate_id();
 $_SESSION["authorized"] = true;
  $_SESSION["email"] = $row['email'];
   $_SESSION["name"] = $row['name'];
   session_write_close();
   header("location:index.php?message=<div class='alert alert-success'>Successfully loggedin</div>");
}
else{
	 header("location:login.php?message=<div class='alert alert-danger'>credential donot matched</div>");
}
}
else{
	 header("location:login.php?message=<div class='alert alert-danger'>credential donot matched</div>");
}




?>