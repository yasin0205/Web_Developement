<?php
include('db.php');
$title = $_POST['title'];
$catid = $_POST['catid'];
$createdat = time();
$descs = $_POST['descs'];
$thumbnail = $_FILES['thumbnail']['name'];
$ext = pathinfo($thumbnail, PATHINFO_EXTENSION);
$newname = rand(). time(). 'dude24'. '.' . $ext;
$videos = $_FILES['videos']['name'];
$ext1 = pathinfo($videos, PATHINFO_EXTENSION);
$newname1 = rand(). time(). 'dudevideos'. '.' . $ext1;
try {
	move_uploaded_file($_FILES['thumbnail']['tmp_name'], "uploads/" .$newname);
	move_uploaded_file($_FILES['videos']['tmp_name'], "uploads/" .$newname1);
	$stmt = $dbcon->prepare("INSERT INTO post(title,descs, thumbnail, videos, catid, created_at) VALUES(:title, :descs, :thumbnail, :videos, :catid, :created_at)");

	$stmt->bindParam(":title", $title);
	$stmt->bindParam(":descs", $descs);
	$stmt->bindParam(":thumbnail", $newname);
	$stmt->bindParam(":videos", $newname1);
	$stmt->bindParam(":catid", $catid);
	$stmt->bindParam(":created_at", $createdat);
	if($title==''){
	header("location:index.php?message=<div class='alert alert-danger'>Insert title</div>");
	}
	else if(strlen($title) > 255){
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