<?php
session_start();
session_destroy();

header("location:login.php?message=<div class='alert alert-danger'>You are logged Out</div>");

header_remove('x_powered-by');



?>