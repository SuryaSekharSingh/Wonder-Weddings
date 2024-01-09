<?php
    include("include/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include/head_links.php"); ?>
    <title>Welcome</title>
    <style>
    @media (max-width:890px) {
        .venue-detail {
            margin-left: -30% !important;
        }
    }

    @media (max-width:800px) {
        .venue-detail {
            margin-left: -20% !important;
        }
    }

    @media (max-width:700px) {
        .venue-detail {
            margin-left: -10% !important;
        }

        .venue-detail .content {
            width: 40rem !important;
        }

        .venue-detail .content h3 {
            font-size: 2.5rem !important;
        }

        .venue-detail .content p {
            font-size: 1.1rem !important;
        }
    }

    @media (max-width:460px) {
        .venue-detail {
            margin-left: 0 !important;
        }

        .venue-detail .content {
            width: 30rem !important;
        }

        .venue-detail .content h3 {
            font-size: 2rem !important;
        }

        .venue-detail .content p {
            font-size: 1rem !important;
        }
    }
    </style>


</head>

<body class="body">
    <div class="container">

        <?php 
            include("include/header.php");
            if(isset($_GET['booking']) && $_GET['booking'] == true){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Booking Successful.
                <button type="button" class="btn-close bookALert-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'; 
            }
        ?>

        <section class="home">

            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide"
                        style="background:url(images/home-slider/home-slide-1.jpg) no-repeat">
                        <div class="content">
                            <h3>plan your wedding!</h3>
                            <p>Make your dream destination wedding a reality with an experienced crew at Planned
                                Weddings and make is memorable. </p>
                            <a href="about.php" class="button">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide"
                        style="background: url(images/home-slider/home-slide-2.jpg) no-repeat;">
                        <div class="content">
                            <h3>plan your wedding!</h3>
                            <p>̥Make your dream destination wedding a reality with an experienced crew at Planned
                                Weddings and make is memorable. </p>
                            <a href="about.php" class="button">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide"
                        style="background: url(images/home-slider/home-slide-4.webp) no-repeat;">
                        <div class="content">
                            <h3>plan your wedding!</h3>
                            <p>Make your dream destination wedding a reality with an experienced crew at Planned
                                Weddings and make is memorable. </p>
                            <a href="about.php" class="button">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide"
                        style="background: url(images/home-slider/home-slide-3.jpg) no-repeat;">
                        <div class="content">
                            <h3>plan your wedding!</h3>
                            <p>Make your dream destination wedding a reality with an experienced crew at Planned
                                Weddings and make is memorable. </p>
                            <a href="about.php" class="button">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide"
                        style="background: url(images/home-slider/home-slide-5.webp) no-repeat;">
                        <div class="content">
                            <h3>plan your wedding!</h3>
                            <p>Make your dream destination wedding a reality with an experienced crew at Planned
                                Weddings and make is memorable. </p>
                            <a href="about.php" class="button">discover more</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next text-danger"></div>
                <div class="swiper-button-prev text-danger"></div>
                <div class="swiper-pagination"></div>
            </div>
            <?php 
            if(isset($_SESSION['userID'])){

                $sql="select * from booking where user_id = " . $_SESSION['userID']; 
                $result=mysqli_query($conn,$sql);
                    $numRows=mysqli_num_rows($result); 
                    if($numRows> 0){
                    echo '<div class="wedding-container">
                        <h3>My Bookings (' . $numRows . ')</h3>
                        <div class="title-dash" style="width:16rem;"></div>';
                        while($row = mysqli_fetch_assoc($result)){
                            $payment_done = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['payment_done']);
    
                            $payment_due = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['payment_due']);
                            $package = $row['package'];
                            $priceQuery = "SELECT * from pricing WHERE plan = '$package'";
                            $priceResult = mysqli_query($conn,$priceQuery);
                            $rowPrice = mysqli_fetch_assoc($priceResult);
                            $totalPrice = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $rowPrice['price']);

                            $hallQuery = "SELECT * from halls WHERE sno = " . $row['hall_sno'];
                            $hallResult = mysqli_query($conn,$hallQuery);
                            $rowHall = mysqli_fetch_assoc($hallResult);
                            $hall = explode ("-",$rowHall['hall']);
                            
                            $cityQuery = "SELECT * from venue WHERE id = " . $rowHall['id'];
                            $cityResult = mysqli_query($conn,$cityQuery);
                            $rowCity = mysqli_fetch_assoc($cityResult);
                            $city = $rowCity['city'];

                            $dateTime = new DateTime($row['wedding_date']);
                            $formattedDate = $dateTime->format('jS M Y');
                            
                            $dateTime = new DateTime($row['date_of_booking']);
                            $bookingDate = $dateTime->format('jS M Y \a\t g:i A');

                            echo '<div class="couple-data">
                                <div class="wedd-details">
                                    <div class="wedd-name">' . $row["groom_name"] . '</div>
                                    <div class="child-of">Son of</div>
                                    <div class="wedd-parent">' . $row["groom_parent"] . '</div>
                                </div>
                                <div class="weds">WEDS</div>
                                <div class="wedd-details">
                                    <div class="wedd-name">' . $row["bride_name"] . '</div>
                                    <div class="child-of">Daughter of</div>
                                    <div class="wedd-parent">' . $row["bride_parent"] . '</div>
                                </div>
                            </div>
    
                            <div class="date-data">
                            <h4>ON</h4>
                            <p>' . $formattedDate . ' (' . $city . ')</p>
                            </div>
    
                            <div class="wedding-wrapper">
    
                                <div class="venue-data">
                                    <img src="images/venues/' . $city . '/' . $row['hall_sno'] . '.jpg"  />
                                </div>
    
                                <div class="price-data">
                                    <table>
                                        <tr>
                                            <td class="data-wedding left">Venue Selected:</td>
                                            <td class="value-wedding">' . $hall[0] . '</td>
                                        </tr>   
                                        <tr>
                                            <td class="data-wedding left">Booked on:</td>
                                            <td class="value-wedding">' . $bookingDate . '</td>
                                        </tr>
                                        <tr>
                                            <td class="data-wedding left">Package Chosen:</td>
                                            <td class="value-wedding">' . $row["package"] . '</td>
                                        </tr>
                                        <tr>
                                            <td class="data-wedding left">Total Price:</td>
                                            <td class="value-wedding">₹' . $totalPrice . '/-</td>
                                        </tr>';
                                        if($row['payment_due'] != 0){
                                            echo '
                                            <tr>
                                                <td class="data-wedding left">Amount Paid:</td>
                                                <td class="value-wedding">₹' . $payment_done . '/-</td>
                                            </tr>
                                            <tr>
                                                <td class="data-wedding left">Amount Due:</td>
                                                <td class="value-wedding">₹' . $payment_due . '/-</td>
                                            </tr>';
                                        }
                                        else{
                                            echo '
                                            <tr>
                                                <td class="data-wedding">Payment Status:</td>
                                                <td class="value-wedding">Fully paid</td>
                                            </tr>';
                                        }
                                    echo '</table>
                                
                                </div>
                            </div>';
                        }
                        echo '</div>';
                    }
            }
            ?>
            <div class="info">
                <h3>out-of-this-world weddings</h3>
                <div class="title-dash" style="width:30rem;"></div>
                <p>Ever dreamed of exchanging vows on a sun-kissed private beach, or hosting your reception at
                    exquisite
                    venues? With a choice of opulent ballrooms, breathtaking outdoor venues and iconic settings
                    to say
                    ‘I
                    do’, Planned Weddings brings your dream wedding to life. Menus from world-class chefs,
                    contemporary
                    accommodation options for your guests, and a host of luxury extras make this one of India's
                    finest
                    and
                    most sought-after wedding destination. Getting married in India has never been more
                    carefree. Let
                    our
                    team of dedicated wedding specialists take care of every detail, so you can enjoy the most
                    important
                    day
                    of your life.</p>
            </div>

            <div class="info" style="margin-bottom: 10rem;">
                <h3>The Perfect Venue</h3>
                <div class="title-dash" style="width:25rem;"></div>
                <p>From bespoke celebrations for 10 people to show-stopping weddings for 2,000 guests, Planned
                    Weddings
                    offers incredible venues for your big day. All you need to do is choose the type and place
                    of the
                    kind
                    of wedding you like the most and we will cover you the best way possible.</p>

                <div class="venue-home">
                    <div class="swiper-slide slide"
                        style="background:url(images/venue-home-main.jpg) no-repeat;width:90%;margin:auto;display:flex;border-radius:1.5rem;">
                        <div class="div-left venue-detail" style="margin-left: -40%;margin-top: 10rem;">
                            <div class="content" style="width:55rem;">
                                <h3 style="padding:1rem;padding-bottom:.5rem;font-size:3.2rem;">Plan your dream
                                    wedding
                                </h3>
                                <p style="margin-top:0;">Contact our team of dedicated wedding specialists for a
                                    tailored proposal.</p>
                                <a href="venues.php" class="button">Explore Venues</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <section class="services">

            <div class="service-info">
                <h3>Services Offered</h3>
                <div class="title-dash" style="width:25rem;"></div>
                <p>Join us and get all the best services here at Planned Weddings. We have crew with the best possible
                    skillset just for you to replenish your dreams of a perfect wedding. We provide services such as
                    photography, wedding registry, guest management and accomodation, fine dining, entertainment,
                    wedding ceremony with the best possible decoration and a lot more. Enjoy all of those services with
                    a minimal price.</p>
            </div>

            <div class="swiper service-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-1.jpg" alt="">
                        <div class="content">
                            <h3>photography</h3>
                            <p>Our fine crew will click top class pictures which you will remember throughout your
                                lives.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-2.jpg" alt="">
                        <div class="content">
                            <h3>haldi ceremony</h3>
                            <p>Haldi is a very enjoyable event done by both the parties with a lot of guests. We will
                                take care of it.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-3.jpg" alt="">
                        <div class="content">
                            <h3>wedding registry</h3>
                            <p>Planned Weddings' got you covered by registering your Wedding with the authorities.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-4.jpg" alt="">
                        <div class="content">
                            <h3>sangeet</h3>
                            <p>Sangeet is a very charismatic event which will be organized by us. So that you could just
                                sit back and enjoy the moments.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-5.jpg" alt="">
                        <div class="content">
                            <h3>guest management</h3>
                            <p>Guest Management is also a very hectic job.It includes both accomodation and dining.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-10.jpg" alt="">
                        <div class="content">
                            <h3>bridal care</h3>
                            <p>We have our hands on one of the finest makeup artists in India who can turn you into an
                                angel fallen from the heavens upon this holy earth.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-6.jpg" alt="">
                        <div class="content">
                            <h3>wedding cake</h3>
                            <p>After exchanging the rings a lavish Wedding Cake sets up the mood. So our crew makes the
                                best cake for you.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-7.jpg" alt="">
                        <div class="content">
                            <h3>wedding ceremony</h3>
                            <p>Mostly Weddings happen once in a lifetime so we want to make it memorable. We have got
                                you covered.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-8.jpg" alt="">
                        <div class="content">
                            <h3>entertainment</h3>
                            <p>Entertainment is one of the most important things so we have added the finest of the
                                events.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/service-slider/service-9.jpg" alt="">
                        <div class="content">
                            <h3>fine dining</h3>
                            <p>At the very last fine Dining also takes an important role so our chefs will specially
                                make sure of that.</p>
                            <a href="service.php" class="button">Services</a>
                        </div>
                    </div>

                </div>
                <!-- <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div> -->
                <div class="swiper-pagination" style="display:none;"></div>
            </div>

        </section>

        <section class="portfolio">

            <div class="portfolio-info">
                <h3>explore our weddings</h3>
                <div class="title-dash" style="width:20rem;"></div>
                <p>Plan an exceptional Arabic, Indian or Western wedding in India, with bespoke packages tailored to
                    suit your wedding size and style. Trust us, we will not let you down in any manner. Giving top notch
                    facilities to our clients is our topmost priority here in Planned Weddings.</p>
                <!-- <a href="portfolio.php" class="button" style="margin-left:1.9rem;">Portfolio</a> -->
            </div>
            <div class="swiper portfolio-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">

                        <img src="images/types/hindu-wedding.jpg" alt="">
                        <div class="content">
                            <h3>hindu wedding</h3>
                            <p>Embark on a journey of love with us on Wonder Weddings for an unforgettable celebration.
                            </p>
                            <a href="portfolio.php" class="button">our portfolio</a>
                        </div>
                    </div>
                    <div class="swiper-slide slide">

                        <img src="images/types/muslim-wedding.jpg" alt="">
                        <div class="content">
                            <h3>muslim wedding</h3>
                            <p>Embark on a journey of love with us on Wonder Weddings for an unforgettable celebration.
                            </p>
                            <a href="portfolio.php" class="button">our portfolio</a>
                        </div>
                    </div>
                    <div class="swiper-slide slide">

                        <img src="images/types/christian-wedding.jpg" alt="">
                        <div class="content">
                            <h3>christian wedding</h3>
                            <p>Embark on a journey of love with us on Wonder Weddings for an unforgettable celebration.
                            </p>
                            <a href="portfolio.php" class="button">our portfolio</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">

                        <img src="images/types/sikh-wedding.jpg" alt="">
                        <div class="content">
                            <h3>sikh wedding</h3>
                            <p>Embark on a journey of love with us on Wonder Weddings for an unforgettable celebration.
                            </p>
                            <a href="portfolio.php" class="button">our portfolio</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination" style="display:none;"></div>
            </div>

        </section>
        <!-- <div class="short-screen"></div> -->

        <?php include("include/footer.php");?>
    </div>



    <?php include("include/body_links.php");?>

    <script>
    var swiper = new Swiper(".home-slider", {
        loop: true,
        spaceBetween: 20,
        speed: 1500,
        effect: 'fade',
        autoplay: {
            delay: 3500,
        },
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var swiper = new Swiper(".service-slider", {
        loop: true,
        spaceBetween: 30,
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
            // 1200: {
            //   slidesPerView: 4,
            //   },
        },
    });

    var swiper = new Swiper(".portfolio-slider", {
        loop: true,
        spaceBetween: 30,
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
</body>

</html>