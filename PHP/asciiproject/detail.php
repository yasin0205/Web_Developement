<?php
include('db.php');
$get_id = $_GET['postid'];
  $stmt = $dbcon->prepare("SELECT * FROM post WHERE id=$get_id");
  $stmt->execute();
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
  extract($row);
  $title1=  $row['title']; 
  }
 
  $name = 'name';
  $value = $title1;
  setcookie($name, $value, time() + (86400), "/");
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title1; ?></title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link href="http://vjs.zencdn.net/6.2.8/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <style type="text/css">
  <?php
$get_id = $_GET['postid'];
try{
  $stmt = $dbcon->prepare("SELECT * FROM post WHERE id=$get_id");
  $stmt->execute();
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
  extract($row);
  $catid= $row['catid'];
  }
}
 catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
 
?>
  <?php
try{
  $stmt = $dbcon->prepare("SELECT * FROM categories WHERE id=$catid");
  $stmt->execute();
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
  extract($row);
?>
 
 

 <?php }
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
   .activer<?php echo $id; ?>{
      color: red;
    } 
  </style>
  </head>
  <body>
   <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dude 24</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>

              
                </ul>
              </li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
  <div class="container">
  <div class="row">
  <div class="col-md-8">
<?php
include('db.php');
$get_id = $_GET['postid'];
try{
  $stmt = $dbcon->prepare("SELECT * FROM post WHERE id=$get_id");
  $stmt->execute();
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
  extract($row);
  $catid= $row['catid'];
  date_default_timezone_set('Asia/Kathmandu');

  $date= date("Y-m-d h:i:sa", $created_at);
  
?>

  <br />
 <i> Posted At: <?php echo $date; ?></i>
  <h1><?php echo $title; ?></h1>


 <p><?php echo $descs; ?></p>
 
 <?php }
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
<?php
try{
  $stmt = $dbcon->prepare("SELECT * FROM categories WHERE id=$catid");
  $stmt->execute();
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
  extract($row);
?>
 
  <h1>Category:<button class="btn btn-primary btn btn-sm"><?php echo $name; ?></button></h1>

 <?php }
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
<hr />
</div>

</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://vjs.zencdn.net/6.2.8/video.js"></script>
  </body>
</html>