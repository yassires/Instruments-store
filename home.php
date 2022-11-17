<?php
include('scripts.php');
if(!isset($_SESSION['name'])){
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

<body>

<style>
          body{
            background-image: url('Untitled.jpg');
            background-color: grey;
            background-blend-mode: multiply;

          }
          </style>

        <!-- -----------------------begin of navbar----------------------- -->
        <!-- ------------------------------------------------------------- -->

        <nav class="navbar navbar-expand-lg   sticky-top">
          <div class="container-fluid">
            <a href="#" class="navbar-brand mb-0 ">
              <img src="logo3.png" width="50px" alt="logo">
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

                <li class="nav-item dropdown">
                  <a href="#" class="nav-link
                              dropdown-toggle p-lg-3" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                      print_r($_SESSION['name']);
                      print_r($_SESSION['id']);

                    ?>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="1" class="dropdown-item">Edit Profil</a></li>
                    <li><a href="2" class="dropdown-item">Item2</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form method="POST" class="ps-4">
                        <button class="btn btn-danger main-btn rounded-3 " type="submit" name="logout">
                          Log out
                        </button>
                    </form>

                  </ul>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
        <div class="text-end ">
          <a  onclick="addbtn()" >
                    <a href="#modal-task" data-bs-toggle="modal" class="btn btn-light main-btn rounded-3 mt-5 me-5"><i class="bi bi-plus-lg me-2"></i>Add Instruments</a>
              </a>
        </div>
              
        <!-- ------------------------------------------------------------- -->
        <!-- -----------------------end of navbar----------------------- -->



        
        <!-- -----------------------------begin of the cards----------------------------------- -->
          <!-- ---------------------------------------------------------------------- -->
          <div class="container-fluid mt-5">
                    
                      <div class="row w-100">
                        <?php
                        display();
                        ?>
                      </div>
                    
          </div>
          <!-- -----------------------------end of thecards----------------------------------- -->
          <!-- ---------------------------------------------------------------------- -->





                    <!-- TASK MODAL -->
                    <!-- ---------- -->
                    <div class="modal fade" id="modal-task">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <form action="scripts.php" method="POST" id="form-task" enctype="multipart/form-data">
                            <div class="modal-header">
                              <h5 class="modal-title">Add Instruments</h5>
                              <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                            </div>
                            <div class="modal-body">
                              <!-- This Input Allows Storing Task Index  -->
                             <div>  
                                <input type="file" name="img_upload"><br><br>
                            
                            
                             


                              <input type="text" id="task-id" name="index">
                              <div class="mb-3">
                                <label class="form-label">Instruments name</label>
                                <input name="name" type="text" class="form-control" id="pdt-title" />
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input name="price" type="text" class="form-control"  id="pdt-price"></input>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input name="quantity" type class="form-control" id="pdt-quantity"></input>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" type="text" class="form-control" rows="6" id="pdt-description"></textarea>
                              </div>

                            </div>
                            <div class="modal-footer">
                              <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                              <button type="submit" name="delete" class="btn btn-danger task-action-btn" id="pdt-delete-btn">Delete</a>
                                <button type="submit" name="update" class="btn btn-warning task-action-btn" id="pdt-update-btn" data-bs-dismiss="modal">Update</a>
                              <button type="submit" name="save" class="btn btn-primary task-action-btn" id="pdt-save-btn">Save</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                     <!-- TASK MODAL -->
                    <!-- ---------- -->


  
  <!-- ================== BEGIN core-css ================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script defer src="/your_path_to_version_6_files/js/fontawesome.js"></script>
  <!-- ================== END core-css ================== -->
  <script src="script.js"></script>

</body>


</html>