<?php
    include("../include/db_connect.php");  
    $exist = false;
    $success = false;
    $remove = false;
    if(isset($_GET['remove']) && isset($_GET['venue'])){
        $id = $_GET['remove'];
        $venue = str_replace('%20',' ',$_GET['venue']);
        $sql = "delete from halls where id=$id AND hall='$venue'";
        $res = mysqli_query($conn,$sql);
        $remove = true;
        header("location:dest.php");
    }
    
    if(isset($_GET['cityID'])){
        $id = $_GET['cityID'];
        $sql = "delete from venue where id = $id";
        $res = mysqli_query($conn,$sql);

    }

    if(isset($_GET['add']) && isset($_GET['venue'])){
        $id = $_GET['add'];
        $venue = str_replace('%20',' ', $_GET['venue']);
        $sql = "insert into halls(id,hall) values($id,'$venue')";
        $res = mysqli_query($conn,$sql);
        header("location:dest.php");
    }

    if(isset($_POST['new-venue'])){
        $city = $_POST['city'];
        $venue = $_POST['venue'];
        $res = mysqli_query($conn,"select * from venue where city = '$city'");
        $numRows = mysqli_num_rows($res);
        if($numRows == 0){
            $sql = "insert into venue(city) values('$city')";
            $res = mysqli_query($conn,$sql);
        }
        else{
            $sql="select * from halls where hall = '$venue' AND id=(select id from venue where city = '$city')";
            $res = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($res);
            if($num == 0){
                $sql = "select id from venue where city = '$city'";
                $res = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($res);
                $sql = "insert into halls(id,hall) values(" . $row["id"] . ",'$venue')";
                $res = mysqli_query($conn,$sql);
                $success = true;
            }
            else{
               $exist = true;
            }
        }
    }

    $query = "select * from venue";
    $result = mysqli_query($conn,$query);
    if($result){
        $numRows = mysqli_num_rows($result);
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <link rel="icon" href="../images/logo/favicon.ico" type="image/x-icon">
    <?php 
        include("include/head_links.php"); 
    ?>

</head>

<body>
    <div class="cont">
        <?php include("include/dash_design.php"); ?>

        <section class="admin-section">
            <?php include("include/header.php"); ?>

            <div class="title">
                <p>wedding Destinations</p>
            </div>
            <?php
                if($exist)
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Venue already exists!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
                if($success)
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Venue has been added successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
                if($remove)
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Venue has been removed!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            ?>
            <div class="dest-body">
                <?php 
                    for($i = 1;$row = mysqli_fetch_assoc($result); $i++){
                        $id = $row['id'];
                        $city = $row['city'];
                
                        echo '<div class="city">
                    <h3 style="margin-left:3rem">'. $i . '. '. $city .'
                    <button class="button remove-city" id="'. $row['id'] .'" style="margin-left:2rem;" >remove city</button>
                    <button class="button add" id="'. $row['id'] .'" style="margin-left:2rem;" >add venue</button>
                    </h3>
                    <div class="halls">
                        <table>
                        <tr>
                            <th class="venues">venues</th>
                            <th>action</th>
                        </tr>';
                
                    $query = "select * from halls where id=$id";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        $num = mysqli_num_rows($res);
                    }
                    while($rows = mysqli_fetch_assoc($res)){
                        $hall = $rows['hall'];

                        // echo '<li style="margin-left:4rem">'. $hall .'</li>';
                        echo '<tr>
                                <td>' . $hall . '</td>
                                <td><button class="button remove" id="'. $rows['id'] .'">remove</button></td>  
                            </tr>';
                
                    }
                    echo '
                    </table>
                    </div>
                    </div>';
                }
                ?>
            </div>

            <div class="add-venue">
                <h3>Add new city</h3>
                <form action="" method="post">
                    <div class="input-city">
                        <label for="city">Enter city : </label>
                        <input type="text" name="city" id="city" placeholder="Enter city" required/>
                    </div>
                    <div class="input-venue">
                        <label for="venue">Enter Venue : </label>
                        <input type="text" name="venue" id="venue" placeholder="Enter Venue" required/>
                    </div>
                    <button class="button" name="new-venue">add</button>
                </form>
               
            </div>

        </section>
    </div>


    <script>
        var deletes = document.getElementsByClassName("remove");

        Array.from(deletes).forEach((element) =>{
            element.addEventListener("click",(e) =>{
                let id = e.target.id;
                let venue = e.target.parentNode.parentNode.getElementsByTagName("td")[0].innerText;
                // console.log(id,venue);
                if(confirm("Are you sure you want to remove this venue!")){
                    window.location = `/pro/admin/dest.php?remove=${id}&venue=${venue}`;
                }
                else {
                    console.log("NO");
                }
            })
        })

        var adds = document.getElementsByClassName("add");

        Array.from(adds).forEach((element) =>{
            element.addEventListener("click",(e) =>{
                let id = e.target.id;
                let venue = prompt("Enter venue !");
                if(venue !== null){
                    if(confirm(`Do you want to add ${venue}`)){
                        window.location =  `/pro/admin/dest.php?add=${id}&venue=${venue}`;
                    }
                    else{
                        console.log("no");
                    }
                }
            })
        })

        var remove_city = document.getElementsByClassName("remove-city");

        Array.from(remove_city).forEach((element) =>{
            element.addEventListener("click", (e) =>{
                let id = e.target.id;
                if(confirm("All the corresponding venues will also get deleted")){
                    window.location = `/pro/admin/dest.php?cityID=${id}`;
                }
                else{
                    console.log("no");
                }
            })
        })
    </script>
</body>

</html>