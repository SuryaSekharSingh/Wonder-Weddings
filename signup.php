<?php
include("include/db_connect.php");

$showAlert = false;
$passmis = false;
$existUser = false;
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        include("include/db_connect.php");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $exists = false;

        $existSql = "select email from users where email='$email'";
        $result = mysqli_query($conn, $existSql);
        $numExistRow = mysqli_num_rows($result);
        if($numExistRow > 0){
            $exists = true;
        }
        else{
            $exists = false;
        }

        if(($password == $cpassword) && $exists == false)
        {
           $hash = password_hash($password,PASSWORD_DEFAULT);
           $sql="INSERT INTO `users` (name , contact , `email`, `password`, `join_date`) VALUES ('$name' , '$contact' , '$email', '$hash', 'current_timestamp()')";     
           $result=mysqli_query($conn,$sql);
           if($result){
               $showAlert=true;
           }
        }
        else if($password != $cpassword){
            $passmis = true;
        }
        else{
            $existUser = true;
        }
    }
  
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <?php  include("include/head_links.php");?>
    
    <link rel="stylesheet" href="css/login.css">

    <style> 
        .alert{
            height:6rem;
            border-radius: 1rem;
            font-size: 1.6rem;
            padding-top:auto auto;
        }
        .alert button{
            margin:auto;
        }
    </style>
</head>
<body class="body">
    <div class="container">
        <!-- <span aria-hidden="true">&times;</span>  used to output x if necessary-->
        <?php
        include("include/header.php");
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is created and you can login now.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </button>
            </div>';
        }

        if($passmis){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Password Mismatch.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            
          </div>';
        }

        if($existUser){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Username already exists. Please enter a unique username
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        
        <section>
            <div class="login-box">
                <form action="#" method="POST">
                    <h2>SignUp</h2>

                    <div class="input-box">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" name="name" required>
                        <label>Name</label>
                    </div>

                    <div class="input-box">
                        <span class="icon">
                            <!-- <ion-icon name="mail"></ion-icon> -->
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="text" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <!-- <input type="text" name="code" required style="width:20%;"> -->
                        <span class="icon">
                            <!-- <ion-icon name="mail"></ion-icon> -->
                            <i class="fas fa-phone"></i>
                        </span>
                        <input type="text" name="contact" required>
                        <label>Contact</label>
                    </div>

                    <div class="input-box">
                        <span class="icon">
                            <!-- <ion-icon name="lock-closed"></ion-icon> -->
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password"  name="password" required>
                        <label>Password</label>
                    </div>

                    <div class="input-box">
                        <span class="icon">
                            <!-- <ion-icon name="lock-closed"></ion-icon> -->
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="cpassword" required>
                        <label> Confirm Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" required>I agree to the terms & conditions</label>
                        
                    </div>
                    <button type="submit">Signup</button>
                    <div class="signup-link">
                        <p>Already have an account?<a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
            </section>

            <?php include("include/footer.php"); ?>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
        <?php  include("include/body_links.php");?>
    
</body>
</html>