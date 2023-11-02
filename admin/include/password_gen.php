<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location:../index.php");
}

if(isset($_POST['submit'])){
    // echo "hello";
    $pass = $_POST['password'];
    $hash = password_hash($pass,PASSWORD_DEFAULT);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>

    <div class="container">
        <form method="post" action="password_gen.php">
            <div class="mb-3 mt-5">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary submit" name="submit">Submit</button>
        </form>
        
        <div class="mt-4">
            <label for="exampleInputPassword1" class="form-label">Hashed Password</label>
            <input type="text" class="form-control" id="password_hashed" value="<?php if(isset($_POST['submit'])) echo $hash;  ?>">
        </div>
    </div>





    <script>

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>
</html>