<?php
include ("../include/db_connect.php");
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location:index.php");
}

if(isset($_GET['add']) && isset($_GET['id'])){
    $input = str_replace(',','',$_GET['add']);
    $sql = "select * from booking where id=" . $_GET['id'];
    $res = mysqli_query($conn,$sql);
    $row_data = mysqli_fetch_assoc($res);
    $old_payment = $row_data['payment_done'] + $input;
    $due_payment = $row_data['payment_due'] - $input;

    $sql = "UPDATE `booking` SET `payment_done` = $old_payment , `payment_due` = $due_payment WHERE `booking`.`id` =".$_GET['id'];
    $res = mysqli_query($conn,$sql);
    // echo var_dump($old_payment);
}
// adding comma's in indian currency format  but it doesn't work on windows as money_format function doesn't work properly
// $amount = '100000';
// setlocale(LC_MONETARY, 'en_IN');
// $amount = money_format('%!i', $amount);
// echo $amount;

//  for windows this works fine 
// $num = 1234567890.123;
// $num = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $num);
// echo $num;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <?php include("include/head_links.php"); ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
</head>

<body>
    <div class="cont">
        <?php include("include/dash_design.php"); ?>

        <section class="admin-section">
            <?php include("include/header.php"); ?>

            <div class="title">
                <p>payments</p>
            </div>

            <div class="payment-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>groom name</th>
                            <th>bride name</th>
                            <th>contact</th>
                            <th>wedding date</th>
                            <th>plan & price</th>
                            <th>payment done</th>
                            <th>payment due</th>
                            <th>add payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "select * from booking";
                        $result = mysqli_query($conn,$sql);
                        for($i = 1;$row = mysqli_fetch_assoc($result); $i++){
                            $package = mysqli_real_escape_string($conn, $row['package']);
                            $sql = "select * from pricing where plan='$package'";
                            $res = mysqli_query($conn,$sql);
                            $data = mysqli_fetch_assoc($res);
                            $price = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $data['price']); //added commas in INR style
                            $payment_done = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['payment_done']);
                            $payment_due = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['payment_due']);


                            echo '<tr>
                            <td>' . $i . '</td>   
                            <td>' . $row["groom_name"] . '</td>   
                            <td>' . $row["bride_name"] . '</td>   
                            <td>' . $row["contact"] . '</td>     
                            <td>' . $row["wedding_date"] . '</td>   
                            <td>' . $row["package"] . '[₹ ' . $price . ']</td>   
                            <td>₹ ' . $payment_done . '</td>   
                            <td>₹ ' . $payment_due . '</td>
                            <td><button id="' . $row['id'] . '" class="button add-payment" style="color:black">add</button></td>
                        </tr>';
                        }
                    ?>

                    </tbody>
                </table>
            </div>

        </section>
    </div>


    <script>
    var adds_payment = document.querySelectorAll('.table .add-payment');

    Array.from(adds_payment).forEach((element) => {
        element.addEventListener("click", (e) => {
            let id = e.target.id;
            var payment_done = e.target.parentNode.parentNode.getElementsByTagName("td")[6].innerText;
            let new_payment = prompt("Enter amount !");
                if(new_payment !== null){
                    if(confirm(`Do you want to add ${new_payment}`)){
                        window.location =  `/pro/admin/payments.php?add=${new_payment}&id=${id}`;
                    }
                    else{
                        console.log("no");
                    }
                }

        })
    })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    
</body>

</html>