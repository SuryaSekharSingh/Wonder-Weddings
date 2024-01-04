<?php
    include("include/db_connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include("include/head_links.php");?>
    <link rel="stylesheet" type="text/css" href="css/styleVenues.css" />
    <title>
        <?php
        $id = $_GET['id'];
        $query = "select * from venue where id=".$id;
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        echo "Venues in " . $row['city'];
    ?></title>

</head>



<body class="body">

    <div class="container">
        <?php include("include/header.php"); ?>

        <section class="venues">

            <div class="info">
                <h3>Wonder Weddings in <?=$row['city']?></h3>
                <div class="title-dash" style="width:30rem;"></div>
                <p class="p-main">
                    <?php
                        echo "When it comes to weddings in " . $row['city'] . ", we have the dedicated crew who works hard for your wedding to be memorable in every way possible. So just join us in creating a ton of happiness among as many people as possible.<br>The services we provide and the customers we have spread happiness are endless. You will remember it from the bottom of your hearts."
                    ?>
                </p>
            </div>
        </section>

        <div class="locations" style="background-color:transparent;">
            <h3>banquet halls in <?=$row['city']?></h3>
            <div class="title-dash" style="width:34rem;"></div>
        </div>

        <section class="hall-body">

            <?php
            $query = "select * from halls where id=".$id;
            $result = mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){
                $id= $row['id'];
                $sno = $row['sno'];
                $address= $row['hall'];
                $hall= explode ("-",$address);
                $sql = "select * from venue where id=$id";
                $res = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($res);
                $city = $row['city'];
                echo '<div class="box">
                    <div class="image">
                    <img src="images/venues/' . $city . '/' . $sno . '.jpg" alt="" />
                    </div>
                    <h2>' . $hall[0] . '</h2>
                    <a href="booking.php?hall_sno=' . $sno . '&hall_name=' . $hall[0] .'" class="button btn-success" style="padding: .7rem 1rem;">Select hall</a>
                </div>';
            }
            ?>
        </section>

        <?php include("include/footer.php"); ?>
    </div>




    <?php  include("include/body_links.php");?>

</body>

</html>