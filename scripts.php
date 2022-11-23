<?php
//INCLUDE DATABASE FILE
include("database.php");
session_start();


//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
// session_start();

//ROUTING
if (isset($_POST['signup']))       signup();
if (isset($_POST['save']))        saveProduct();
if (isset($_POST['update']))      updateTask();
if (isset($_POST['delete']))        deleteTask();
if (isset($_POST['p_submit']))        updateprofil();










function display()
{
    global $connc;
    $requete = "SELECT * FROM products ";
    $query = mysqli_query($connc, $requete); 
    //<img height="270px" src="'.$row["img"].'" class="card-img-top"  alt="...">
    // return  $query;
    while ($row = mysqli_fetch_assoc($query)) {
                $id = $row['id'];
                echo '
             
                                    <div class=" col-sm-12 col-md-6 col-lg-3   mt-3">
                                        <div class="card" tt=' . $row['id'] . '>
                                            <div style="height: 300px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('.$row["img"].'); ">
                                            
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-truncate" title="'.$row['name'].'" id="name' . $id . '">'.$row["name"].'</h5>
                                                <p class="card-text text-truncate" id="description'.$id.'" desc="' . $row['description'] . '">'.$row['description'].'</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item" id="price' . $id . '" price_pdt="' . $row['price'] . '"> Price : '.$row["price"].' $</li>
                                                <li class="list-group-item" id="quantity' . $id . '" quantity_pdt="' . $row['quantity'] . '"> Quantity : '.$row["quantity"].'</li>
                                            </ul>
                                            <div class="card-body" >
                                            <button   type="submit" name="details" href="#modal-task" data-bs-toggle="modal" onclick="edit(' . $id . ')" class="btn btn-primary rounded-3 col-12 fs-4">Details</button>
                                            </div>
                                        </div>
                                    </div>
     
                         ';
    }
    //SQL SELECT
    
}


function saveProduct()
{
    global $connc;

        $img_name=$_FILES['img_upload']['name'];
        $tmp_img_name=$_FILES['img_upload']['tmp_name'];
        $folder='image_uploaded/'.$img_name;
        move_uploaded_file($tmp_img_name,$folder);

    
   
    //CODE HERE
    $pdt_name = $_POST['name'];
    $pdt_price = $_POST['price'];
    $pdt_quantity = $_POST['quantity'];
    $pdt_description = $_POST['description'];
    $requete = "INSERT INTO `products`(`name`, `price`, `quantity`, `description`, `img`, `user_id`)
            
             VALUES ('$pdt_name','$pdt_price','$pdt_quantity','$pdt_description','$folder','$_SESSION[id]')";
    mysqli_query($connc, $requete);
    //SQL INSERT
    $_SESSION['message'] = "Task has been added successfully !";
    header('location: home.php');
}









function updateTask()
{
    require 'database.php';
    $id = $_POST['index'];
    $pdt_name = $_POST['name'];
    $pdt_price = $_POST['price'];
    $pdt_quantity = $_POST['quantity'];
    $pdt_description = $_POST['description'];
    $img_name=$_FILES['img_upload']['name'];
    $tmp_img_name=$_FILES['img_upload']['tmp_name'];
    $folder='image_uploaded/'.$img_name;
    
    //CODE HERE
    if($tmp_img_name==""){
        //SQL UPDATE
    $upd = "UPDATE  `products` SET  `name`='$pdt_name',`price`='$pdt_price',`quantity`='$pdt_quantity',`description`='$pdt_description'  WHERE id = $id ";
    mysqli_query($connc, $upd);
    
    $_SESSION['update'] = "instrument has been updated successfully !";
    header('location: home.php');
    }else{
        $img_name=$_FILES['img_upload']['name'];
        $tmp_img_name=$_FILES['img_upload']['tmp_name'];
        $folder='image_uploaded/'.$img_name;
        move_uploaded_file($tmp_img_name,$folder);
            //SQL UPDATE
            $upd = "UPDATE  `products` SET  `name`='$pdt_name',`price`='$pdt_price',`quantity`='$pdt_quantity',`description`='$pdt_description',`img`='$folder'  WHERE id = $id ";
            mysqli_query($connc, $upd);

            $_SESSION['update'] = "instrument has been updated successfully !";
            header('location: home.php');
    }
    
}




function deleteTask()
{
    //CODE HERE
    $id = $_POST['index'];
    global $connc;
    $del = "DELETE FROM products where id='$id'";
    $query = mysqli_query($connc, $del);
    
    $_SESSION['message'] = "Task has been deleted successfully ";
    header('location: home.php');
}






function user_count(){
    global $connc;
    $requete= "SELECT COUNT(*) as 'ct' FROM users";
    $query = mysqli_query($connc, $requete);
    while($user_count = mysqli_fetch_assoc($query)){
        echo $user_count['ct'];
    };
    
}


function pdt_count(){
    global $connc;
    $requete= "SELECT COUNT(*) as 'ct' FROM products";
    $query = mysqli_query($connc, $requete);
    while($pdt_count = mysqli_fetch_assoc($query)){
        echo $pdt_count['ct'];
    }

}



function capital(){
    
 
    global $connc;
    $capital=0;
    $requete = "SELECT * FROM products";
    $query = mysqli_query($connc, $requete);
    while($row = mysqli_fetch_assoc($query)){
    $capital+=$row['price'] * $row['quantity'];
 
    
    }  
    
    echo $capital;
}

    
    






function signup()
{

    global $connc;
    
    //CODE HERE
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
   
    //Select email from the database to use it for validation
    $sql = "SELECT * FROM users where email = '$email' ";
    $result = mysqli_query($connc, $sql);
    $emails = mysqli_num_rows($result);

    // $requete = "INSERT INTO `users`(`name`, `email`, `password`)
            
    //          VALUES ('$name','$email','$password')";
    // mysqli_query($connc, $requete);
    //SQL INSERT
    //Form validation
    if(empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['message1'] = "Please fill all required fields!!";
        header('location: signup.php');
    }
    else if($password !== $confirm_password){
        //Check if password and confirm password not the same
        $_SESSION['message1'] = "Password and Confirm password should match!!";
        header('location: signup.php');
    }
    // in_array($email,$admin)
    elseif($emails!=0){
        //Check if password and confirm password not the same
        $_SESSION['message1'] = "Email already exists!!";
        echo'Email already exists!!';
    }
    else{ //checking if the Query is successful. 
    $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    mysqli_query($connc, $sql);
    header('location: login.php');
    }

}




if(isset($_POST['save']))
{
    // 
    header('location: home.php');
}
// if(isset($_POST['img_submit']))
// {
//     // 
//     header('location: home.php');
// }
    
// login-------------------------------------------------------------------------------------------------------------------------------------------------------------
// login-------------------------------------------------------------------------------------------------------------------------------------------------------------
// login-------------------------------------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $sql = "SELECT * FROM users WHERE email='$email' && password='$password'";
    $result = mysqli_query($connc,$sql);
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)){
        $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];
        header("Location:home.php");
        
    }
    else
    {
    $_SESSION['shit'] = 'check your information';
    header("Location:login.php");
    die();
    // $_SESSION['shit'] = 'check your information';
    }

}
// login-------------------------------------------------------------------------------------------------------------------------------------------------------------
// login-------------------------------------------------------------------------------------------------------------------------------------------------------------
// login-------------------------------------------------------------------------------------------------------------------------------------------------------------



















// log out-------------------------------------------------------------------------------------------------------------------------------------------------------------
// log out-------------------------------------------------------------------------------------------------------------------------------------------------------------
// log out-------------------------------------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['logout'])){
    unset($_SESSION);
    session_destroy();
    header("Location:login.php");
}

// log out-------------------------------------------------------------------------------------------------------------------------------------------------------------
// log out-------------------------------------------------------------------------------------------------------------------------------------------------------------
// log out-------------------------------------------------------------------------------------------------------------------------------------------------------------


// profil edit
// profil edit

function updateprofil()
{
    require 'database.php';
    $usr_pname = $_SESSION['name'];
    $usr_email = $_POST['p_email'];
    $usr_password = $_POST['p_password'];
            //SQL UPDATE
            $upd = "UPDATE  `users` SET  `email`='$usr_email', `password`='$usr_password' where `users`.`name` = '$usr_pname'";
            mysqli_query($connc, $upd);
            header('location: home.php');
}



// profil edit
// profil edit
