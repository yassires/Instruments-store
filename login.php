

<?php
include('scripts.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruments Store | Log in</title>
    
    <!-- ================== BEGIN core-css ================== -->
    <link rel="stylesheet" href="style.css">
    <link href="/your_path_to_version_6_files/css/fontawesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- ================== END core-css ================== -->


    <!-- BEGIN parsley css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <!-- END parsley css-->

   
   
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

  
    <div class="container  py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row  justify-content-center">
  
        <div class="col-lg-6 mb-5 mb-lg-0 ">
          <div class="card">
            <div class="card-body px-4 py-5 px-md-5">
             
              <form id="login"  method="POST">
                    <div>
                        <div class="d-flex  justify-content-center">
                           <img src="logo.png" alt="logo" width="50%">
                        </div>

                        <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h4>
                    </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                  <div id="errorEmail" class="form-text text-start"></div>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                  <div id="errorPassword" class="form-text text-start"></div>
                </div>
                
                <?php

                   if (isset($_SESSION["shit"])) : ?>
                   
                     <div class="alert alert-danger" role="alert">
                      
                          <?php
                          echo $_SESSION['shit'];
                          unset($_SESSION['shit']);
                           ?>
                     </div>
                     <?php endif?>
                   
                
                  
                <!-- Submit button -->
                <button type="submit" name="login" class="btn btn-primary btn-block mb-4">
                  Log in
                </button>
                <div >
                    <p>Not a member? <a class="text-decoration-none" href="signup.php">Register</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</body>
    <!-- ================== BEGIN core-css ================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script defer src="/your_path_to_version_6_files/js/fontawesome.js"></script>
        <!-- ================== END core-css ================== -->
    <script src="script.js"></script>
    <!-- BEGIN jquery js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END jquery js-->

    <!-- BEGIN parsley js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END parsley js-->


     <!-- ================== BEGIN core-js ================== -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script defer src="/your_path_to_version_6_files/js/fontawesome.js"></script>
    <script src="script.js"></script>

    <!-- ================== END core-js ================== -->
</html>


