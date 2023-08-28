<?php

include("include/db_connect.php");
$query = "select * from services";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include("include/head_links.php");?>
    <link rel="stylesheet" type="text/css" href="css/styleVenues.css" />   
    <title>Our Services</title>

</head>

<body class="body">

    <div class="container">
        <?php include("include/header.php"); ?>

        <section class="venues" style="margin-bottom:6rem;">
            <div class="info" >
                <h3>Services we offer</h3>
                <div class="title-dash" style="width:20rem;"></div>
                <p style="width:60%;margin-bottom:0;">We offer a ton of services to make your wedding a special one. There are different types of packages which includes a specific set of services, the basic plan will offer 5 services, premium offers 8 services and ultimate offers 12 services. You can check the details in the packages page. Everything is listed clearly. In case you want any modifications in your plan, feel free to contact us. We are here to assit you in every way possible.</p>
                <a href="contact.php" class="button" style="margin-bottom:1.5rem;margin-top:0;">contact us</a>
            </div>
        </section>

        <div class="card-container d-flex mb-5" style="flex-direction:column;align-items:center;">
                <div class="card-show row ml-3" >
                <?php
                while($row = mysqli_fetch_assoc($result)){ 

                    $id=$row["id"];
                    $service=$row["service"];
                ?>
                    <div class="col-md-4 my-4">
                        <div class="card" style="width: 40rem;background-color: var(--transparent-white);border-radius: 1rem;box-shadow: var(--box-shadow-service);margin:auto;" >
                            <div class="image">
                                <img src="images/service-slider/service-<?php echo $id;  ?>.jpg" class="card-img-top" alt="..."  id="img-city" style="border-radius:1rem;height:25rem;width:40rem;" />

                            </div>
                            <div class="card-body " style="display:block;text-align:center;">
                                <h2 class="card-title" ><?php echo $service; ?></h2>
                                
                                <!-- <a href="halls.php?id=<?php echo $id; ?>" class="button btn-success" style="padding: .7rem 1rem;">View Details</a> -->
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>


        <?php include("include/footer.php"); ?>
    </div>




    <?php  include("include/body_links.php");?>

</body>

</html>