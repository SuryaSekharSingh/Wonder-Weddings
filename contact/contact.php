<?php
include("../include/db_connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $Fname=$_POST['FirstName'];
    $Lname=$_POST['LastName'];
    $Email=$_POST['Email'];
    $Phone=$_POST['PhoneNumber'];
    $Address=$_POST['YourAddress'];
    $Message=$_POST['YourMessage'];
    
    $results = "SELECT * FROM `contact` WHERE Email='$Email'";
    $connects = mysqli_query($conn,$results);
    $rows = mysqli_num_rows($connects);
    if($rows < 1)
    {
        // echo "hii";
        $sql= "INSERT INTO `contact`(`Fname`,`Lname`, `Email`, `Phone`, `Address`, `Message`) VALUES ('$Fname','$Lname','$Email','$Phone','$Address','$Message')";
        $data = mysqli_query($conn,$sql);
        if($data>0){
        echo'<script>alert("Your Data has been successfully : submitted");
        </script>';
        }
        else{
            echo"<script>alert('Your Data is not  : submitted');</script>";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>contact us</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <!-- <script>s
        if(window.history.replaceState)
        {
            window.history.replaceState(null, null, window.location.href);
        }
    </script> -->
    <body>
        <!-- <?php @include 'connection.php'; ?> -->
    <div class="container">
        <div class="contact-us-head">
            Contact Us
        </div>
        <div class="contact-us-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium delectus minus mollitia unde dolor eius.
        </div>
        <form method="post" action="contact.php">
            <div class="First-last-wrap">
                <div class="inpot-box">
                    <label for="FirstName">First Name</label>
                    <input type="text" placeholder="First Name" name="FirstName" id="FirstName">
                </div>
                <div class="inpot-box">
                    <label for="LastName">Last Name</label>
                    <input type="text" placeholder="Last Name" name="LastName" id="LastName">
                </div>
            </div>
            <div class="inpot-box">
                <label for="Email">Your Email</label>
                <input type="Email" placeholder="Your Email" name="Email" id="Email">
            </div>
            <div class="inpot-box">
                <label for="PhoneNumber">Phone Number</label>
                <input type="number" placeholder="Phone Number" name="PhoneNumber" lenght="10" id="PhoneNumber">
            </div>
           
            <div class="inpot-box">
                <label for="YourAddress">Your Address</label>
                <textarea name="YourAddress" placeholder="Your Address" id="YourAddress" cols="15" rows="5"></textarea>
            </div>
            <div class="inpot-box">
                <label for="YourMessage">Your Message</label>
                <textarea name="YourMessage" placeholder="Your Message" id="YourMessage" cols="15" rows="5"></textarea>
            </div>
            <div class="btn-wrap">
               <a herf="#"> <button type="submit">Submit</button></a>
            </div>
            <!-- <script type="text/javascript">
                function mess()
                {
                    alert("your data successfully saved!");
                    return true;
                }
            </script> -->
        </form>
    </div>
</body>
</html>