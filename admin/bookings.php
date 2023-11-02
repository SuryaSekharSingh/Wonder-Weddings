<?php
include ("../include/db_connect.php");
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location:index.php");
}

if(isset($_GET['removeID'])){
    $id = $_GET['removeID'];
    $sql = "delete from booking where id=$id";
    $res = mysqli_query($conn,$sql);
    header("location:bookings.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <?php include("include/head_links.php"); ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
</head>

<body>
    <div class="cont">
        <?php include("include/dash_design.php"); ?>

        <section class="admin-section">
            <?php include("include/header.php"); ?>

            <div class="title">
                <p>bookings</p>
            </div>

            <div class="booking-body">
                <table class="table" id="myTable" >
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>groom name</th>
                            <th>bride name</th>
                            <th>contact</th>
                            <th>city</th>
                            <th>hall</th>
                            <th>wedd date</th>
                            <th>book date</th>
                            <th>plan</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "select * from booking";
                        $result = mysqli_query($conn,$sql);
                        for($i = 1;$row = mysqli_fetch_assoc($result); $i++){
                            $sql = "select * from halls where sno=".$row['hall_sno'];
                            $res = mysqli_query($conn,$sql);
                            $data = mysqli_fetch_assoc($res);
                            $hall = explode("-",$data['hall']);
                            $sql = "select * from venue where id=".$data['id'];
                            $res = mysqli_query($conn,$sql);
                            $data = mysqli_fetch_assoc($res);
                            $city = $data['city'];


                            echo '<tr>
                            <td>' . $i . '</td>   
                            <td>' . $row["groom_name"] . '</td>   
                            <td>' . $row["bride_name"] . '</td>   
                            <td>' . $row["contact"] . '</td>   
                            <td>' . $city . '</td>   
                            <td>' . $hall[0] . '</td>   
                            <td>' . $row["wedding_date"] . '</td>   
                            <td>' . $row["date_of_booking"] . '</td>   
                            <td>' . $row["package"] . '</td>   
                            <td>
                            <button class="button check" style="padding:.3rem .3rem;"><i class="fa-solid fa-user-check"></i></button>
                            <button class="button delete" id="' . $row['id'] . '" style="padding:.3rem .5rem;"><i class="fa-solid fa-trash-can"></i></button>
                            </td>  
                            </tr>';
                        }
                    ?>

                    </tbody>
                </table>
            </div>

        </section>

    </div>


    <script> 
        var deletes = document.querySelectorAll(".delete");
        Array.from(deletes).forEach((element)=>{
            element.addEventListener("click",(e)=>{
                let id = e.target.id;
                if(confirm("Are you sure you want to remove this booking!")){
                    window.location = `/pro/admin/bookings.php?removeID=${id}`;
                }
                else {
                    console.log("NO");
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