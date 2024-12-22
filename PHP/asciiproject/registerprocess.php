<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$conf_password = $_POST['conf_password'];
$password_hash = password_hash($conf_password, PASSWORD_BCRYPT);
if($password !== $conf_password)
{
	header("location:register.php?message=<div class='alert alert-danger'>password did not matched</div>");
	
}
else {
try {
	$stmt = $dbcon->prepare("INSERT INTO user_table(name,email, password) VALUES(:name, :email, :conf_password)");

	$stmt->bindParam(":name", $name);
	$stmt->bindParam(":email", $email);
	$stmt->bindParam(":conf_password", $password_hash);
	if($name==''){
	header("location:register.php?message=<div class='alert alert-danger'>Insert name</div>");
	}
	else if($email==''){
	header("location:register.php?message=<div class='alert alert-danger'>Insert email</div>");
	}
	else if(strlen($name) > 255){
	header("location:register.php?message=<div class='alert alert-danger'>Length Should be less than 25</div>");
	}
	else {

	$stmt->execute();
	header("location:login.php?message=<div class='alert alert-success'>successfully registered. Now Insert Your email and password to login</div>");

	}
}

catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
}
?>