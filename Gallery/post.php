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
    echo "<a href='$path$file'>$file</a>      <a href='../d.php?file=$file'>Delete</a><br>";
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
    echo "<a href='$path$file'>$file</a>      <a href='../d.php?file=$file'>Delete</a><br>";
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