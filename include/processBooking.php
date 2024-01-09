<?php
include("db_connect.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_SESSION['userID'])){
        $userID = $_SESSION['userID'];
        $Gname = $_POST['g-name'];
        $Bname = $_POST['b-name'];
        $GPname = $_POST['g-p-name'];
        $BPname = $_POST['b-p-name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $package = $_POST['package'];
        $weddingDate = $_POST['date'];
        $hall_sno = $_POST['hall_sno'];
        $hallName = $_POST['venue'];
        
        $packageQuery = "select * from pricing where plan='$package'";
        $packageResult = mysqli_query($conn, $packageQuery);
        $packageRow = mysqli_fetch_assoc($packageResult);
        $payment_due = $packageRow['price'];

        $bookingQuery = "insert into booking (user_id, groom_name, bride_name, groom_parent, bride_parent, contact, email, hall_sno, wedding_date, package, payment_done , payment_due) VALUES 
        ($userID , '$Gname' , '$Bname' , '$GPname' , '$BPname' , '$contact' , '$email' , '$hall_sno' , '$weddingDate' , '$package' , 0 , '$payment_due')";
        $bookingResult = mysqli_query($conn, $bookingQuery);
        header("location:../index.php?booking=true");
        exit();
    }
    else{
        header("location:../booking.php?hall_sno=$hall_sno&hall_name=$hallName");
        exit();
    }
}
?>