<?php 
    
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/styleLogin.css">
</head>
<body>
        <div class="sign-up-form">
            <div class="form-image"> 
                <img src="images/form-bg.png" alt="">
            </div>
            <form class="form-content">
                <div class="form-heading">
                    <img src="images/logo.png" alt="">
                    <h1>Create Account</h1>
                    <p>Please fill all the required fields to create your account</p>
                </div>
                <div class="input-wrap">
                    <div class="input">
                        <input type="text" id="username" name="username" placeholder=" ">
                        <div class="label">
                            <label for="username">Username</label>
                        </div>
                    </div>

                    <div class="input">
                        <input type="email" id="email" name="email" placeholder=" ">
                        <div class="label">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="input">
                        <input type="passwordpassword" id="password" name="password" placeholder=" ">
                        <div class="label">
                            <label for="password">Password</label>
                        </div>
                    </div>

                    <div class="input">
                        <input type="password" id="confirmpassword" name="confirmpassword" placeholder=" ">
                        <div class="label">
                            <label for="confirmpassword">Confirm Password</label>
                        </div>
                    </div>

                    <button type="submit">Create Account</button>
                </div>
            </form>

        </div>


</body>
</html>