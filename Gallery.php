<!DOCTYPE html>
<html>
<head>
  <title>Gallery Page</title>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Add jQuery and Popper.js links (required for Bootstrap JavaScript) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- Add Bootstrap JavaScript link -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="gallery row">
  <?php
    $directory = "./Gallery/";
    $images = glob($directory . "*.*");

    // Loop through each image in the directory
    foreach($images as $image) {
      echo "<div class='col-md-4'>
              <img src='" . $image . "' class='img-fluid'>
            </div>";
    }
  ?>
</div>

</body>
</html>