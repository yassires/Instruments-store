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
  <title>Instruments Store</title>


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
      background-color: rgb(58, 58, 58);

      background-blend-mode: multiply;


    }
  </style>




  <!-- -----------------------begin of navbar----------------------- -->
  <!-- ------------------------------------------------------------- -->

  <nav class="navbar navbar-expand-lg   sticky-top navbar-dark bg-dark mb-5">
    <div class="container-fluid">
      <a href="home.php" class="navbar-brand mb-0 ">
        <div class="d-flex">
           <img src="logocl.png" width="50px" alt="logo">
        <span class="d-none d-md-block d-lg-block">
          Instruments Store
        </span>
        </div>
       
        
      </a>

      <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a href="home.php" class="nav-link p-lg-3 active">
              Home
            </a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link
                              dropdown-toggle p-lg-3" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              print_r($_SESSION['name']);
              print_r($_SESSION['id']);

              ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end " aria-labelledby="navbarDropdown">
              <li><a href="" class="dropdown-item">Edit Profil</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <form method="POST" class="ps-4">
                <button class="btn btn-danger main-btn rounded-3 ms-3" type="submit" name="logout">
                  Log out
                </button>
              </form>

            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  

  <!-- ------------------------------------------------------------- -->
  <!-- -----------------------end of navbar----------------------- -->








  <!-- -----------------------profil edit-------------------------- -->
  <!-- -----------------------profil edit-------------------------- -->

  <!-- Section: Design Block -->


  
<div class="container   text-center   ">
  <div class="row  justify-content-center ">

    <div class="col-lg-12 col-md-12 mb-5 mb-lg-0 ">
      <div class="card">
        <div class="card-body px-4 py-5 px-md-5">
         
          <form id="login"  method="POST">
                <div>
                    <h4 class="fw-normal mb-3 pb-3 mt-5" >Profil Edit</h4>
                </div>
            <!-- name input -->
            <div class="form-outline mb-4 mt-5" >
              <input type="text"   name = "pname" class="form-control" placeholder="<?php
              print_r($_SESSION['name']);?>" disabled/>
              
              <label class="form-label" for="form3Example3">Username</label>
              <div id="errorEmail" class="form-text text-start"></div>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4 mt-5">
              <input type="email" name="p_email" class="form-control" />
              <label class="form-label" for="form3Example3">Email address</label>
              <div id="errorEmail" class="form-text text-start"></div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4 mt-5">
              <input type="password"  name="p_password" class="form-control" />
              <label class="form-label" for="form3Example4">Password</label>
              <div id="errorPassword" class="form-text text-start"></div>
            </div>
            
            
            
              
            <!-- Submit button -->
            <button type="submit" name="p_submit" class="btn btn-primary mb-4 mt-5 mx-5">Submit</button>
            
           
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Section: Design Block -->
       
</form>
</div>






  <!-- -----------------------profil edit-------------------------- -->
  <!-- -----------------------profil edit-------------------------- -->



  <!-- ================== BEGIN core-css ================== -->
  <script defer src="/your_path_to_version_6_files/js/fontawesome.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <!-- ================== END core-css ================== -->
  

</body>


</html>