<?php
include('scripts.php');
if (!isset($_SESSION['name'])) {
  header('Location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instruments Store-profil</title>


  <!-- ================== BEGIN core-css ================== -->
  <link rel="stylesheet" href="style.css">
  <link href="/your_path_to_version_6_files/css/fontawesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- ================== END core-css ================== -->



</head>

<body class="bg">

  <style>
    body {
      background-image: url('Untitled.jpg');
      background-color: grey;
      background-blend-mode: multiply;


    }
  </style>




  <!-- -----------------------begin of navbar----------------------- -->
  <!-- ------------------------------------------------------------- -->

  <nav class="navbar navbar-expand-lg   sticky-top navbar-dark bg-dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand mb-0 ">
        <img src="logocl.png" width="50px" alt="logo">
        Instruments Store
      </a>

      <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a href="#" class="nav-link p-lg-3 active">
              Home
            </a>
          </li>

          
        </ul>

      </div>
    </div>
  </nav>
  

  <!-- ------------------------------------------------------------- -->
  <!-- -----------------------end of navbar----------------------- -->








  <!-- -----------------------------begin of the cards----------------------------------- -->
  <!-- ---------------------------------------------------------------------- -->
  <div class="container-fluid mt-5  bg-dark bg-opacity-25">

                  <?php
                if (isset($_SESSION["update"])) : ?>

                    <div class="alert alert-success alert-bs-dismissible fade show d-flex justify-content-between" role="alert">
                      <div>
                      <strong>Well done!</strong> <?php
                      echo $_SESSION['update'];
                      unset($_SESSION['update']);
                        ?>
                      </div>
                      <button type="button" class="close bg-transparent border-0" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif?>


        
        <div class="text-white mt-3 d-flex mb-4">
        <i class="bi bi-box-seam fs-4 me-3"></i>
          <h3>Products :</h3>
        </div>
        
    <div class=" row ">
    <div class=" col-sm-12 col-md-6 col-lg-3   mt-3">
                                        <div class="card">
                                            <div style="height: 300px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url()">
                                            
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-truncate" >guitar</h5>
                                                <p class="card-text" >guitar</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item" > Price : 10 $</li>
                                                <li class="list-group-item" > Quantity : 15</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
    </div>
                

  </div>
  <!-- -----------------------------end of thecards----------------------------------- -->
  <!-- ---------------------------------------------------------------------- -->





  



  <!-- ================== BEGIN core-css ================== -->
  <script defer src="/your_path_to_version_6_files/js/fontawesome.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <!-- ================== END core-css ================== -->
  

</body>


</html>