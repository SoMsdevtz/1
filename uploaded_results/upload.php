<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>Upload Page</title>
    
     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload JavaScript with Progress Ba | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> 
    



  <style>
    .images-container {
      display: flex;
      flex-wrap: wrap;
    }

    .image {
      width: 300px;
      height: 200px;
      margin: 10px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <?php
error_reporting(-1);
?>


<p>Temp directory: <?php echo sys_get_temp_dir(); ?></p>

<form enctype="multipart/form-data" action="" method="POST">
    Max file size is set in php.ini<br>
    Send this file: <input name="myfile" type="file" />
    <input type="submit" value="Send File" />
</form>

  <?php
$path = "./";
$files = scandir($path);

foreach($files as $file) {
  if ($file != "." && $file != "..") {
    echo "<a href='$path$file'>$file</a>      <a href='../delete.php?file=$file'>Delete</a><br>";
  }
}?>



<?php if (count($_FILES)): ?>

<?php $myfile = $_FILES["myfile"]["tmp_name"]; ?>


<h2>Move the uploaded file</h2>

<?php
$success = move_uploaded_file($myfile,
                              __DIR__."/".basename($_FILES["myfile"]["name"]));
?>

<?php if ($success): ?>
<p>
    The uploaded file (<?php echo $_FILES["myfile"]["name"]; ?>) was moved to
    the www/ directory using the <b>move_uploaded_file()</b> function.
  
  <?php
$path = "./";
$files = scandir($path);

foreach($files as $file) {
  if ($file != "." && $file != "..") {
    echo "<a href='$path$file'>$file</a>      <a href='../delete.php?file=$file'>Delete</a><br>";
  }
}?>
</p>
<?php else: ?>
<p style="color: red;">
    move_uploaded_file() failed.
</p>
<?php endif; // $success ?>

<?php endif; // count($_FILES) ?>
  <script src="script.js"></script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
        
        
        
        
    </body>
</html>