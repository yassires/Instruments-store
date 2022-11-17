<?php
//INCLUDE DATABASE FILE
session_start();
include("database.php");
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
// session_start();

//ROUTING
if (isset($_POST['signup']))       signup();
if (isset($_POST['save']))        saveProduct();
// if (isset($_POST['update']))      updateTask();
// if (isset($_POST['delete']))      deleteTask();









function display()
{
    global $connc;
    $requete = "SELECT * FROM products ";
    $query = mysqli_query($connc, $requete); 
    
    // return  $query;
    while ($row = mysqli_fetch_assoc($query)) {
                $id = $row['id'];
                echo '
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <div class="card " >
                                            <img height="270px" src="'.$row["img"].'" class="card-img-top"  alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title" id="name' . $id . '" data="' . $row['name'] . '">'.$row["name"].'</h5>
                                                <p class="card-text" id="description' . $id . '" desc="' . $row['description'] . '">'.substr($row['description'],0,10).'</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item" id="price' . $id . '" price_pdt="' . $row['price'] . '"> Price : '.$row["price"].'</li>
                                                <li class="list-group-item" id="quantity' . $id . '" quantity_pdt="' . $row['quantity'] . '"> Quantity : '.$row["quantity"].'</li>
                                            </ul>
                                            <div class="card-body">
                                                <button type="submit" name="update" class="btn btn-warning " id="task-update-btn" onclick="edit(' . $id . ')">Update</button>
                                                <button type="submit" name="delete" class="btn btn-danger " id="task-delete-btn">Delete</button>
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
    $pdt_img=$_POST['img_upload'];
    //CODE HERE

    $upd = "UPDATE  `products` SET  `name`='$pdt_name',`price`='$pdt_price',`quantity`='$pdt_quantity',`description`='".$pdt_description."',`img`='$pdt_img', WHERE id = '$id'";
    mysqli_query($connc, $upd);
    //SQL UPDATE
    $_SESSION['message'] = "Task has been updated successfully !";
    header('location: home.php');
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
    $_SESSION['message'] = "Task has been added successfully !";

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
    echo "incorrect inputs";
    header("Location:login.php");
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