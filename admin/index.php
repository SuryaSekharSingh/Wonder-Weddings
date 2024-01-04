<?php
    include("../include/db_connect.php");  
    if(isset($_POST['login']))
    {
    $pass = $_POST['AdminPass'];
    $query="SELECT * FROM admins WHERE username='$_POST[AdminName]'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['password'])){
            session_start();
            $_SESSION['AdminLoginId']=$_POST['AdminName'];
            $_SESSION['loggedin'] = true; 
            header("location:home.php");
            exit();
        }
        else{
        echo"<script>alert('Incorrect Password!')</script>";
        }
    }
    else{
        echo"<script>alert('Invalid username!')</script>";
    }
    }
    if(isset($_GET['logout']) && $_GET['logout'] == true){
        session_start();
        session_destroy();
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include("../include/head_links.php");?>
    <title>Admin Login!</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body class="body">

    <div class="container">
        <div class="image">
            <img src="../images/logo/wonder-wedding.png" />

        </div>
        <div class="myform">
            <form method="POST">
                <h2>ADMIN LOGIN</h2>
                <input type="text" placeholder="Username" name="AdminName">
                <input type="password" placeholder="Password" name="AdminPass">
                <button type="submit" name="login">LOGIN</button>
            </form>
        </div>

    </div>


    <?php  include("../include/body_links.php");?>

</body>

</html>