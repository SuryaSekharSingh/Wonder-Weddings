<?php 
    include("include/db_connect.php");
    $res = mysqli_query($conn,"select plan,price from pricing");
    $price = array();
    while($row = mysqli_fetch_assoc($res)){
        $price[$row['plan']] = $row['price'];
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

    <title>Pricing</title>

</head>

<body class="body">

    <div class="container">
        <?php include("include/header.php"); ?>

        <section class="packages">
            <div class="info">
                <h3>packages we offer</h3>
                <div class="title-dash" style="width:20rem;"></div>
            </div>

            <div class="box-container">
                <div class="box">
                    <h3>basic plan</h3>
                    <div class="price">₹<?=$price['basic']?>/-</div>
                    <div class="list">
                        <?php
                            $result = mysqli_query($conn,"select services from packages where id=1");
                            while($rows = mysqli_fetch_assoc($result)){
                                echo '<p><i class="fas fa-check"></i> ' . $rows['services'] . '</p>';
                            }
                        ?>
                    </div>
                    <a href="" class="button">Choose plan</a>
                </div>

                <div class="box">
                    <h3>premium plan</h3>
                    <div class="price">₹<?=$price['premium']?>/-</div>
                    <div class="list">
                        <?php
                            $result = mysqli_query($conn,"select services from packages where id=2");
                            while($rows = mysqli_fetch_assoc($result)){
                                echo '<p><i class="fas fa-check"></i> ' . $rows['services'] . '</p>';
                            }
                        ?>
                    </div>
                    <a href="" class="button">choose plan</a>
                </div>

                <div class="box">
                    <h3>ultimate plan</h3>
                    <div class="price">₹<?=$price['ultimate']?>/-</div>
                    <div class="list">
                        <?php
                            $result = mysqli_query($conn,"select services from packages where id=3");
                            while($rows = mysqli_fetch_assoc($result)){
                                echo '<p><i class="fas fa-check"></i> ' . $rows['services'] . '</p>';
                            }
                        ?>
                    </div>
                    <a href="" class="button">choose plan</a>
                </div>

                <div class="box">
                    <h3>absolute plan</h3>
                    <div class="price">₹<?=$price['absolute']?>/-</div>
                    <div class="list">
                        <?php
                            $result = mysqli_query($conn,"select services from packages where id=4");
                            while($rows = mysqli_fetch_assoc($result)){
                                echo '<p><i class="fas fa-check"></i> ' . $rows['services'] . '</p>';
                            }
                        ?>
                    </div>
                    <a href="" class="button">choose plan</a>
                </div>

            </div>

            <p style="text-align:center;margin-top:1rem;color:var(--pure-black);font-size:1.5rem;"><span style="color:var(--red);font-size:1rem;"><i class="fa-solid fa-asterisk"></i></span> However, if you have any issues related to the packages feel free to contact us so that we can provide you with the specifications you are looking for.</p>
        </section>

        <section class="reviews">

            <div class="info">
                <h3>happy clients</h3>
                <div class="title-dash" style="width:18rem;"></div>
            </div>

            <div class="swiper reviews-slider" style="width:93%; margin:auto;">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">

                        <img src="images/pic-1.png" alt="">
                        <h3 style="color:var(--pure-black)">john doe</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium earum temporibus
                            aliquam quaerat quia vitae odit amet ullam, beatae quidem deleniti delectus ratione aliquid
                            illo tempora explicabo asperiores vero veritatis!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                    </div>


                    <div class="swiper-slide slide">

                        <img src="images/pic-2.png" alt="">
                        <h3>john doe</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium earum temporibus
                            aliquam quaerat quia vitae odit amet ullam, beatae quidem deleniti delectus ratione aliquid
                            illo tempora explicabo asperiores vero veritatis!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/pic-3.png" alt="">
                        <h3>john doe</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium earum temporibus
                            aliquam quaerat quia vitae odit amet ullam, beatae quidem deleniti delectus ratione aliquid
                            illo tempora explicabo asperiores vero veritatis!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/pic-4.png" alt="">
                        <h3>john doe</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium earum temporibus
                            aliquam quaerat quia vitae odit amet ullam, beatae quidem deleniti delectus ratione aliquid
                            illo tempora explicabo asperiores vero veritatis!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/pic-5.png" alt="">
                        <h3>john doe</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium earum temporibus
                            aliquam quaerat quia vitae odit amet ullam, beatae quidem deleniti delectus ratione aliquid
                            illo tempora explicabo asperiores vero veritatis!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/pic-6.png" alt="">
                        <h3>john doe</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium earum temporibus
                            aliquam quaerat quia vitae odit amet ullam, beatae quidem deleniti delectus ratione aliquid
                            illo tempora explicabo asperiores vero veritatis!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                    </div>

                </div>
                <div class="swiper-pagination" style="display:none;"></div>

            </div>

        </section>

        <?php include("include/footer.php"); ?>
    </div>



    <script>
    var swiper = new Swiper(".reviews-slider", {
        loop: true,
        spaceBetween: 20,
        autoplay: {
            delay: 3500,
        },
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            450: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1000: {
                slidesPerView: 3,
            },
        },
    });
    </script>

    <?php  include("include/body_links.php");?>

</body>

</html>