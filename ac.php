<head>
        <meta charset="utf-8" />

<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
   <link href="assets/img/">
        
        <style type="css/text">
            
           
                table{
                background-color:green;
            }
            
      
        </style>

        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                      
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
            <br>
    <br>
    <br>
         <br>
  

  
    
      
<br>
  
  

    <h2 class="text-center" > <span class="badge badge-warning" style="animation: blinker 1s linear infinite;"> <a class="text-light" href="#">  PARENTS/GUARDIANS <br>DOWNLOAD DOCUMENTS HERE </a></span></h2>  <br>
  
  <style>
  .blinker {
    animation: blinker 1s linear infinite;
  }

  @keyframes blinker {
    50% {
      opacity: 0;
    }
  }
</style><hr></p><br>

    
   <body>
<section class="d-flex align-items-center" style="background-color: #F5F5F5;">
  <div class="container">
    <div class="row" >
<table>
      <tr>
        <th>DOCUMENTS</th> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <th> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;DOWNLOAD</th>
      </tr>
      <?php
      $path = "uploaded_results/";
      $files = scandir($path);
      foreach ($files as $file) {
        if ($file != "." && $file != ".." && $file != "upload.php") {
          echo "<tr>";
          echo "<td><b><hr>" . $file . "</b></td>";
          echo "<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b><a href='" . $path . $file . "' target='_blank'>Download</a></td></b>";
          echo "</tr>";
        }
      }
      ?>
</table>
  <hr>

<br>

   <br>
    
    
  </div>
</section>

        </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>