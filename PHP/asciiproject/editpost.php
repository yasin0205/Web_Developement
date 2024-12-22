<?php
include('db.php');
$get_id = $_GET['editid'];
$title = $_POST['title'];
$descs = $_POST['descs'];

try{
	$stmt = $dbcon->prepare("UPDATE post SET title=:title, descs=:descs WHERE id=:pid");
	$stmt->bindParam(":pid", $get_id);
$stmt->bindParam(":title", $title);
	$stmt->bindParam(":descs", $descs);
	if($title==''){
	header("location:index.php?message=<div class='alert alert-danger'>Insert title</div>");
	}
	else if(strlen($title) > 25){
	header("location:index.php?message=<div class='alert alert-danger'>Length Should be less than 25</div>");
	}
	else {

	$stmt->execute();
	header("location:index.php?message=<div class='alert alert-success'>success</div>");

	}
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>