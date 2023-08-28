<?php
    include("include/db_connect.php");
    $query = "select * from venue";
    $result = mysqli_query($conn,$query);
    
    if($result){
        $num_rows = mysqli_num_rows($result);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include("include/head_links.php");?>
    <link rel="stylesheet" type="text/css" href="css/styleVenues.css" />

    <title>Venues</title>

</head>

<body class="body">

    <div class="container">
        <?php 
            include("include/header.php"); 
        ?>

        <section class="venues">
            <div class="info">
                <h3>Destination weddings</h3>
                <div class="title-dash" style="width:22rem;"></div>
                <p class="p-main">Destination weddings are certainly trending and we see a lot of couples choosing
                    exotic destinations for their wedding celebrations. The world is open with infinite options to
                    choose from to host your destination wedding celebrations.</p>

                <p>You may choose to get married amongst ancient architecture and historic locations for a wedding in
                    Italy or an intimate wedding in Switzerland or perhaps one of the all-inclusive resorts for a
                    wedding in Turkey. As experienced destination wedding planners, the team at Vivaah Celebrations are
                    here to assist you and advice you on unique destinations and venues for your upcoming destination
                    wedding celebrations.</p>

                <p>For almost a decade, we have specialized in destination wedding celebrations at unique locations and
                    venues around the world. Our past clients have benefited from our relations and contacts at Tourism
                    Board levels at several new destinations that are keen to host your wedding celebrations. Our team
                    of wedding advisors assist you from beginning to end throughout your wedding planning process and
                    curate the events for your big day at destinations across Europe, Asia, and the Far East</p>
            </div>
            
            <div class="locations" style="background-color:transparent;">
                <h3>cities we serve currently</h3>
                <div class="title-dash" style="width:34rem;"></div>
            </div>

            <div class="card-container d-flex my-5" style="flex-direction:column;align-items:center;">
                <div class="card-show row ml-3" >
                <?php
                while($row = mysqli_fetch_assoc($result)){ 

                    $id=$row["id"];
                    $city=$row["city"];
                ?>
                    <div class="col-md-4 my-3">
                        <div class="card" style="width: 35rem;background-color: var(--transparent-white);border-radius: 1rem;box-shadow: var(--box-shadow-ultra);backdrop-filter:blur(1rem);margin:auto;">
                            <div class="image">
                                <img src="images/city/<?php echo $city;  ?>.jpg" class="card-img-top" alt="..."  id="img-city" style="border-radius:1rem;height:25rem;width:35rem;" />

                            </div>
                            <div class="card-body " style="display:block;text-align:center;">
                                <h2 class="card-title"><a style="text-decoration:none;color:var(--red);font-weight:600;font-family: 'Frank Ruhl Libre', 'Poppins';" href="halls.php?id=<?php echo $id; ?>" ><?php echo $city; ?></a></h2>
                                
                                <a href="halls.php?id=<?php echo $id; ?>" class="button btn-success" style="padding: .7rem 1rem;">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>

        </section>


        <?php include("include/footer.php"); ?>
    </div>




    <?php  include("include/body_links.php");?>


</body>

</html>