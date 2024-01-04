<?php
include('include/db_connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include("include/head_links.php");?>
    <link rel="stylesheet" type="text/css" href="css/styleVenues.css" />
    <title>Reviews</title>
    <style> 
    @media(max-width:590px){
        .venues .info h3{
            font-size: 3rem;
        }
        .reviews .info h3{
            font-size: 3rem;
        }
        .review-container form h3{
            font-size: 2rem !important;
        }
        .user-ratings .lower_div .heading{
            font-size: 3rem;
        }
        .user-ratings .lower_div p{
            font-size: 1.5rem;
        }
        .side div {
            font-size: 1.3rem;
        }
    }
    @media (max-width:510px){
        .review-container form{
            padding:0 !important;
        }
    }
    @media (max-width:430px){
        .venues .info h3{
            font-size: 2.5rem;
        }
        .review-container form h3{
            font-size: 1.7rem !important;
        }
        .user-ratings .lower_div .heading{
            font-size: 2.5rem;
        }
        .reviews .info h3{
            font-size: 2.5rem;
        }
        .review-container form .input-group{
            width:90%;
        }
    }
    </style>
</head>

<body class="body">

    <div class="container">
        <?php include("include/header.php"); 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_SESSION['userID'])){
                $id = $_SESSION['userID'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $rating = $_POST['rating'];
                $review = $_POST['review'];
                $query = "select user_id from booking where user_id =$id";
                $result = mysqli_query($conn,$query);
                $numRows = mysqli_num_rows($result);
                if($numRows >= 1){
                    $sql = "insert into reviews (user_id, review, stars) values ('$id','$review','$rating')";
                    $res = mysqli_query($conn,$sql);
                }

            }
        }
        ?>

        <section class="venues">
            <div class="info">
                <h3>We appreciate your review!</h3>

                <div class="title-dash" style="width:30rem;"></div>

                <div class="review-container">
                    <form action="" method="POST" id="feedback">

                        <h3>Your Personal information</h3>
                        <div class="form-group">
                            <div class="input-group">
                                <i class="fa fa-user"></i>&nbsp;
                                <input name="name" placeholder="Enter your name" class="form-control" type="text"
                                    id="name_input" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <i class="fa fa-envelope"></i>&nbsp;
                                <input name="email" type="email" class="form-control" placeholder="Enter your email"
                                    required><br>
                            </div>
                        </div>
                        <br>
                        <h3 style="margin-bottom:0">Rate our overall services:</h3>
                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5" required />
                            <label for="star5" title="5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" required />
                            <label for="star4" title="4 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" required />
                            <label for="star3" title="3 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" required />
                            <label for="star2" title="2 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" required />
                            <label for="star1" title="1 star"></label>
                        </div>


                        <h3>Write your feedback.</h3>


                        <div class="form-group">
                            <div class="input-group">
                                <span style="margin-top:5rem;"><i class="fa fa-pencil"></i></span>&nbsp;
                                <textarea class="form-control" id="review" rows="5" name="review" required></textarea>

                            </div>
                        </div>


                        <button type="submit" class="button" id="submit_button">Submit</button>
                        <?php
                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                            if(!isset($_SESSION["userID"])){
                                echo '<div class="popup" id="popup">
                                <img src="images/cross.jpeg">
                                <h2>Please Login</h2>
                                <p>Login to your account first!</p>
                                <button type="button" onclick="closePopup()">OK</button>
                            </div>';
                            echo '<script>openPopup();
                            function openPopup() {
                                popup.classList.add("open-popup");
                            }
                        
                            function closePopup() {
                                popup.classList.remove("open-popup");
                            }
                            </script>';
                            }
                            if(isset($numRows) && $numRows == 0){
                                echo '<div class="popup" id="popup">
                                            <img src="images/cross.jpeg">
                                            <h2>Book first</h2>
                                            <p>You have to make a booking to review !</p>
                                            <button type="button" onclick="closePopup()">OK</button>
                                        </div>';
                                        echo '<script>openPopup();
                                        function openPopup() {
                                            popup.classList.add("open-popup");
                                        }
                                    
                                        function closePopup() {
                                            popup.classList.remove("open-popup");
                                        }
                                        </script>';
                            }
                            if(isset($res)){
                                if($res){
                                    echo '<div class="popup" id="popup">
                                                <img src="images/tick.png">
                                                <h2>Thank You</h2>
                                                <p>Your review has been successfully submitted. Thanks!</p>
                                                <button type="button" onclick="closePopup()">OK</button>
                                            </div>';
                                            echo '<script>openPopup();
                                            function openPopup() {
                                                popup.classList.add("open-popup");
                                            }
                                        
                                            function closePopup() {
                                                popup.classList.remove("open-popup");
                                            }
                                            </script>';
                                }
                                else{
                                    echo '<div class="popup" id="popup">
                                    <img src="images/cross.jpeg">
                                    <h2>Really Sorry</h2>
                                    <p>Some error occured! Try again after sometime.</p>
                                    <button type="button" onclick="closePopup()">OK</button>
                                </div>';
                                echo '<script>openPopup();
                                function openPopup() {
                                    popup.classList.add("open-popup");
                                }
                            
                                function closePopup() {
                                    popup.classList.remove("open-popup");
                                }
                                </script>';
                                }
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </section>




        <section class="user-ratings">
            <div class="lower_div">
                <div class="heading">User Rating
                    <span>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star"></i>
                    </span>
                </div>
                <div class="title-dash" style="width:20rem;"></div>
                <p>4.1 average based on 254 reviews.</p>
            </div>

            <div class="row">
                <div class="side">
                    <div>5 star</div>
                    <div>4 star</div>
                    <div>3 star</div>
                    <div>2 star</div>
                    <div>1 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-5"></div>
                    </div>
                    <div class="bar-container">
                        <div class="bar-4"></div>
                    </div>
                    <div class="bar-container">
                        <div class="bar-3"></div>
                    </div>
                    <div class="bar-container">
                        <div class="bar-2"></div>
                    </div>
                    <div class="bar-container">
                        <div class="bar-1"></div>
                    </div>
                </div>
                <div class="right">
                    <div>150</div>
                    <div>63</div>
                    <div>15</div>
                    <div>6</div>
                    <div>20</div>

                </div>
                
            </div>
        </section>

        <section class="reviews">

            <div class="info">
                <h3>our happy clients</h3>
                <div class="title-dash" style="width:16rem;"></div>
            </div>

            <div class="reviews-container">

                <?php
                    $fetchReviewQuery = "select * from reviews";
                    $fetchReviewResult = mysqli_query($conn,$fetchReviewQuery);
                    while($row = mysqli_fetch_assoc($fetchReviewResult)){
                        echo '<div class="reviews-slide">

                        <img src="images/user.png" alt="">
                        <h3>' . $row["name"] . '</h3>
                        <p>' . $row["review"] . '</p>
                        <div class="stars">';
                        for($i = 1; $i <= $row["stars"]; $i++){
                            echo '<i class="fas fa-star"></i>';
                        }   
                        echo '</div>
    
                    </div>';
                    }
                ?>

            </div>

            <?php include("include/footer.php"); ?>
    </div>




    <?php  include("include/body_links.php");?>


</body>

</html>