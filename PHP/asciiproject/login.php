<?php 
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link href="http://vjs.zencdn.net/6.2.8/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  </head>
  <body>
   <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">

            <a class="navbar-brand" href="#">Ascii Project</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
 
              
            </ul>
             <ul class="nav navbar-nav pull-right">
              <li><a href="login.php">Login</a></li>
             
              
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
  <div class="container">
    
  <div class="row">
    <h1>Login</h1>
    <?php
    if(isset($_GET['message']))
    {
      $message = $_GET['message'];
      echo $message;
    }
    ?>
  <form class="form-horizontal" method="post" action="loginprocess.php">

   <div class="form-group">
    <label for="password">Enter Your Email:</label>
    <input type="email" name="email" class="form-control" placeholder="email">
    
   </div>
    <div class="form-group">
      <label for="password">Enter Your password:</label>
    <input type="password" name="password" class="form-control" placeholder="password">
    
   </div>
    <div class="form-group">

   <button class="btn btn-primary btn-block" name="submit">Login</button>
   </div>
   <a href="register.php">Register</a>
  </form>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://vjs.zencdn.net/6.2.8/video.js"></script>
  </body>
</html>