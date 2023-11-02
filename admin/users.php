<?php
    include("../include/db_connect.php");
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
        header("location:index.php");
    }
    
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "delete from users where id=".$id;
        $res = mysqli_query($conn,$sql);
        header("location:users.php");
    }    
    $query = "select * from users";
    $result = mysqli_query($conn,$query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <?php include("include/head_links.php"); ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
</head>
<body>
    <div class="cont">
        <?php include("include/dash_design.php"); ?>

        <section class="admin-section">
            <?php include("include/header.php"); ?>

            <div class="title">
                <p>Active Users</p>
            </div>    

            <div class="user-body">
                <table class="table" id="myTable">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        for($i = 1; $row = mysqli_fetch_assoc($result); ++$i){
                            
                            echo'<tr>
                                    <td>'. $i .'</td>
                                    <td>'. $row["name"] .'</td>
                                    <td>'. $row['contact'] .'</td>
                                    <td>'. $row['email'] .'</td>
                                    <td><button id="' . $row['id'] . '" class="button delete" style="color:black">terminate</button></td>
                                </tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>

        </section>

    </div>


    <script> 
        var deletes = document.querySelectorAll(".table .delete");
        Array.from(deletes).forEach((element) =>{
            element.addEventListener("click",(e)=>{
                let id = e.target.id;
                let name = e.target.parentNode.parentNode.getElementsByTagName("td")[1].innerText;
                // console.log(id,name);
                if(confirm(`Are you sure you want to terminate ${name}!`)){
                window.location = `/pro/admin/users.php?delete=${id}`;
                }
                else {
                    console.log("NO");
                }
            })
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
    </script>
</body>
</html>