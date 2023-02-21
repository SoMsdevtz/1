<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
<script src="./removeBanner.js"></script>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="./removeBanner.js"></script>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PEACE AND LOVE SCHOOLS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/school.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
   

        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <img class="special-img" img src="school.png"  size="80%" alt="..." width5="50" height="50" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                PEACE AND LOVE  SCHOOLS
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="academics.php">ACADEMICS</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">GALLERY</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
      <li class="nav-item"><a class="nav-link" href="login.php">STAFF</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <style>
        
        
        .gallery img {
  width: 300px;
  height: 200px;
  object-fit: cover;
}
</style>
        
        

            <div class="containe">
   
<div class="gallery">
  <?php
    $directory = "./gallery/";
    $images = glob($directory . "*.*");

    // Loop through each image in the directory
    foreach($images as $image) {
      echo "<img src='" . $image . "'>";
    }
  ?>
</div>
<footer class="bg-dark text-light py-3 custom-footer">
  <div class="container-fluid">
    <div class="d-flex justify-content-between">
      <div>Copyright &copy; PEACE AND LOVE 2023</div>
      <div>
        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter">
          <i class="fab fa-twitter"></i>
        </a>
        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <div>
        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
      </div>
    </div>
  </div>
</footer>

<style>
.custom-footer {
  width: 100%;
  margin: 0 auto;
}
</style>

        <!-- Bootstrap core JS-->
        
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