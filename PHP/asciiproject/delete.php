<?php
include ('db.php');

$delid = $_GET['deleteid'];
$stmt=$dbcon->prepare("DELETE FROM post WHERE id=:post_id");
$stmt->execute(array(':post_id'=>$delid));
	header("location:index.php?message=<div class='alert alert-success'>success</div>");

?>