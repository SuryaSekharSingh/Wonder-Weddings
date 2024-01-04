<?php
include('include/db_connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $message=$_POST['message'];
    
    $sql="INSERT INTO `contact`(`Fname`,`Lname`, `Email`, `Phone`, `Address`, `Message`) VALUES ('$Fname','$Lname', '$email','$contact','$address','$message')";
    $result=mysqli_query($conn, $sql);
    
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
    <title>Contact Us</title>
    <style> 
    @media (max-width:460px){
        form .First-last-wrap{
            display: flex;
            flex-direction: column;
        }
    }
    </style>
</head>

<body class="body">
    <div class="container">
        <?php include("include/header.php"); ?>

        <section class="venues">
            <div class="info">
                <h3 class="heading" style="margin-bottom:0">contact us</h3>
                <div class="title-dash" style="width:10rem;"></div>
                <div class="description">
                    If you have any queries related to any of you facilities or even your personal preferences, feel
                    free to contact us by filling this form or make a call to our contact number '8825238173'. We will
                    be very happy to help you out as much as we can.
                </div>
                <form method="post" action="" class="form">
                    <div class="First-last-wrap">
                        <div class="input-box">
                            <label for="FirstName">First Name</label>
                            <input type="text" placeholder="First Name" name="Fname" id="FirstName">
                        </div>
                        <div class="input-box">
                            <label for="LastName">Last Name</label>
                            <input type="text" placeholder="Last Name" name="Lname" id="LastName">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="Email">Your Email</label>
                        <input type="email" placeholder="Your Email" name="email" id="Email">
                    </div>
                    <div class="input-box">
                        <label for="PhoneNumber">Phone Number</label>
                        <input type="number" placeholder="Phone Number" name="contact" lenght="10" id="PhoneNumber">
                    </div>

                    <div class="input-box">
                        <label for="YourAddress">Your Address</label>
                        <textarea name="address" placeholder="Your Address" id="YourAddress" cols="15" rows="5"
                            required></textarea>
                    </div>
                    <div class="input-box">
                        <label for="YourMessage">Your Message</label>
                        <textarea name="message" placeholder="Your Message" id="YourMessage" cols="15" rows="5"
                            required></textarea>
                    </div>
                    <div class="btn-wrap">
                        <button class="button" type="submit">Submit</button>
                        <?php
                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                            if(isset($result)){
                                echo '<div class="popup" id="popup">
                                    <img src="images/tick.png">
                                    <h2>Thank You</h2>
                                    <p>Your detail has been successfully submitted. Thanks!</p>
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
                                <p>Some error occured! Please try again after sometime.</p>
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
                        ?>
                    </div>

                </form>
            </div>
        </section>

        <?php include("include/footer.php"); ?>
    </div>
    <script>
    let popup = document.getElementById("popup");

    function openPopup() {
        popup.classList.add("open-popup");
    }

    function closePopup() {
        popup.classList.remove("open-popup");
    }
    </script>

    <?php  include("include/body_links.php");?>

</body>

</html>