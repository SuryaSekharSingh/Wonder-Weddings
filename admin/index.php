<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include("../include/head_links.php");?>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="body">

    <div class="login">
        <form action="#" method="POST">
            <h2> admin Login</h2>
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
            
        </form>
    </div>

    <?php  include("../include/body_links.php");?>

</body>
</html>