<?php
$file = $_GET["file"];
$path = "Gallery/";
$file_path = $path . $file;
if (file_exists($file_path)) {
  unlink($file_path);
  echo $file . " was deleted successfully.";
} else {
  echo "Error: " . $file . " does not exist.";
}
?><a href="../links.php">back</a>