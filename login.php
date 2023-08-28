<?php 

$login=false;
$passmis=false;

include("include/db_connect.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $exists = false;

        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($conn,$sql);
        $numRows = mysqli_num_rows($result);
        
        if($numRows == 1){
            while($row = mysqli_fetch_assoc($result)){
                if(password_verify($pass,$row['password'])){
                    $login=true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $name = explode (" ",$row['name']);
                    $_SESSION['username'] = $name[0];
                    header("location:index.php");
                    exit();
                }
                else{
                    $passmis = true;
                }
            }
        }
        else{
            $passmis = true;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php  include("include/head_links.php");?>
    <link rel="stylesheet" href="css/login.css">

    <style> 
        .alert{
            height:6rem;
            border-radius: 1rem;
            font-size: 1.6rem;
            padding-top:1.6rem;
        }
        .alert button{
            margin-top:.7rem;
        }

    </style>
</head>
<body class="body">
    <div class="container">
        <?php 
            include("include/header.php"); 

            if($login){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> You are logged in.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }

            if($passmis){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Incorrect Credentials.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>


        <section>
        
            <div class="login-box" >
                <form action="#" method="POST">
                    <h2>Login</h2>
                    <div class="input-box">
                        <span class="icon">
                            <i class="fas fa-envelope"> </i>
                        </span>
                        <input type="text" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon">
                            <i class="fas fa-lock"> </i>
                        </span>
                        <input type="password" name="pass" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit">Login</button>
                    <div class="signup-link">
                        <p>Don't have an account?<a href="signup.php">Signup</a></p>
                    </div>
                </form>
            </div>

        </section>
        <?php include("include/footer.php"); ?>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php  include("include/body_links.php");?>

    
</body>
</html>