<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <?php include("include/head_links.php"); ?>

</head>
<body>
    <div class="cont">
        <?php include("include/dash_design.php"); ?>

        <section class="admin-section">
            <?php include("include/header.php"); ?>

            <div class="title">
                <p>accounts</p>
            </div>    


        </section>
    </div>
</body>
</html>