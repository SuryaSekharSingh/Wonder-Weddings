<?php
    include("../include/db_connect.php");
    $query = "select * from users";
    $result = mysqli_query($conn,$query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("include/head_links.php"); ?>
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
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>

                    <?php 
                        for($i = 1; $row = mysqli_fetch_assoc($result); ++$i){
                            
                            echo'<tr>
                                    <td>'. $i .'</td>
                                    <td>'. $row["name"] .'</td>
                                    <td>'. $row['contact'] .'</td>
                                    <td>'. $row['email'] .'</td>
                                    <td><button id="button" class="button" style="color:black">terminate</button></td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>

        </section>

    </div>
</body>
</html>