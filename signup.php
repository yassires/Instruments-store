<?php
include('scripts.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruments Store | Sign Up</title>
    
    <!-- ================== BEGIN core-css ================== -->
    <link rel="stylesheet" href="style.css">
    <link href="/your_path_to_version_6_files/css/fontawesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- ================== END core-css ================== -->

   
   
</head>







<body>
    


<style>
          body{
            background-image: url('Untitled.jpg');
            background-color: grey;
            background-blend-mode: multiply;

          }
          </style>


  <!-- Section: Design Block -->
  <section class="background-radial-gradient overflow-hidden">
    
    
      <div class="container py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row justify-content-center">
    
          <div class="col-lg-6 mb-5 mb-lg-0 ">
            
    
            <div class="card">
              <div class="card-body px-4 py-5 px-md-5 pt-0">
                <form id="signup" method="POST" >
                  <div>
                    <div class="d-flex  justify-content-center">
                      <img src="logo.png" alt="logo" width="50%">
                    </div>
                  <h4 class="fw-bold mb-5">Sign up now</h4>
                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="text" name="name" id="name" class="form-control" />
                        <label class="form-label" for="form3Example1">Username</label>
                        <div id="errorUsername" class="form-text text-start"></div>
                      </div>
                    </div>
                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="email" name="email" id="email" class="form-control" />
                        <label class="form-label" for="form3Example2">Email address</label>
                        <div id="errorEmail" class="form-text text-start"></div>
                      </div>
                    </div>
    
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="password" class="form-control" />
                    <label class="form-label" for="form3Example3">Password</label>
                    <div id="errorPassword1" class="form-text text-start"></div>
                  </div>
    
                  <!-- Confirm Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" />
                    <label class="form-label" for="form3Example4">Confirm Password</label>
                    <div id="errorPassword2" class="form-text text-start"></div>
                  </div>
    
    
                  <!-- Submit button -->
                  <button type="submit" name="signup" class="btn btn-primary btn-block ">
                    Sign up
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->

</body>
 <!-- ================== BEGIN core-js ================== -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script defer src="/your_path_to_version_6_files/js/fontawesome.js"></script>
    <script src="signup.js"></script>

    <!-- ================== END core-js ================== -->
</html>