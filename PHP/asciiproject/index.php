<?php 
session_start();
?>

<?php 
include('db.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home</title>
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link href="http://vjs.zencdn.net/6.2.8/video-js.css" rel="stylesheet">
   <link href="index.css" type="text/css" rel="stylesheet" >
   
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
              <?php 
              if(!isset($_SESSION["email"]))
			  {
			  ?>
             <li><a href="login.php">Login</a></li>
             <?php 
                 }
              else {
              echo '<li><a href="logout.php">LogOut</a></li>';
                 }
             ?>
             </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
      
      
  <div class="container">
  <div class="row">
  <br />
  <?php 
if(isset($_SESSION["email"]))
{
?>
  <?php
if(isset($_GET['message']))
{
	$message = $_GET['message'];
	echo $message;
}
?>
 
 
  <form class="form-horizontal" action="addpost.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title"> Enter Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="thumbnail"> Thumbnail</label>
    <input type="file" name="thumbnail"  id="thumbnail">
  </div>

  <div class="form-group">
  <select class="form-control" name="catid">
  <?php
try{
  $stmt = $dbcon->prepare("SELECT * FROM categories");
  $stmt->execute();
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
  extract($row);
?>
 <option value="<?php echo $id; ?>"><?php echo $name; ?></option>

 <?php }
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
</select>
</div>
 
 
 
 
  <div class="form-group">
    <label for="descs">Enter Description</label>
  <textarea class="form-control" name="descs" id="descs"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 <?php 
}
?>
<?php 
$stmt = $dbcon->prepare('SELECT * FROM post ORDER BY id desc LIMIT 0,10');
$stmt->execute();

while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	extract($row);
	?>
  <a href="detail.php?postid=<?php echo $id; ?>">
   <img src="uploads/<?php echo $thumbnail; ?>" width="30%" height="30%">
 </a>
	 <h1>
	 <a href="detail.php?postid=<?php echo $id; ?>">
	 <?php echo $title; ?>
     </a>
	 </h1>
	<p>
	 <?php 
	echo $descs;
	?></p>
   <?php 
	if(isset($_SESSION["email"]))
{
?>
	<a href="delete.php?deleteid=<?php echo $id; ?>" class="btn btn-danger"">Delete</a>
	<a class="btn btn-primary" role="button" data-toggle="collapse" href="#demo<?php echo $id; ?>" aria-expanded="false" aria-controls="collapseExample">
  Edit
</a>
<br />
<div class="collapse" id="demo<?php echo $id; ?>">
  <div class="well">
    <form class="form-horizontal" action="editpost.php?editid=<?php echo $id; ?>" method="post">
  <div class="form-group">
    <label for="title"> Enter Title</label>
    <input type="text" value="<?php echo $title; ?>" name="title" class="form-control" id="title"">
  </div>
  <div class="form-group">
    <label for="descs">Enter Description</label>
  <textarea class="form-control" name="descs" id="descs"><?php echo $descs; ?></textarea>
  </div>
  <button type="submit" class="btn btn-warning">Update</button>
</form>
  </div>
</div>
	 <?php } ?>
	<?php 

}
?>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://vjs.zencdn.net/6.2.8/video.js"></script>
    <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'descs' );
    </script>
  </body>
</html>