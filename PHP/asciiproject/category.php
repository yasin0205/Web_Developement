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
    <title>Bootstrap 101 Template</title>

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
              <li ><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              
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
$get_id = $_GET['catid'];
try{
  $stmt = $dbcon->prepare("SELECT * FROM post WHERE catid=$get_id");
  $stmt->execute();
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
  extract($row);
  $catid= $row['catid'];
?>
<video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
  poster="uploads/<?php echo $thumbnail; ?>" data-setup="{}">
    <source src="uploads/<?php echo $videos; ?>" type='video/mp4'>
    
  </video>
  <h1><?php echo $title; ?></h1>


 <p><?php echo $descs; ?></p>
 
 <?php }
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>

<hr />
</div>
<div class="col-md-4">
<h1>Categories</h1>
<?php
try{
  $stmt = $dbcon->prepare("SELECT * FROM categories");
  $stmt->execute();
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
  extract($row);
?>
 
  <h2><a href="category.php?catid=<?php echo $id; ?>"><?php echo $name; ?></a></h2>

 <?php }
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
</div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://vjs.zencdn.net/6.2.8/video.js"></script>
  </body>
</html>