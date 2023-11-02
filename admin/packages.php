<?php
    include("../include/db_connect.php");
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
        header("location:index.php");
    }
    if(isset($_GET['remove']) && isset($_GET['service'])){
        $id = $_GET['remove'];
        $service = $_GET['service'];
        $sql = "delete from packages where id=$id AND services LIKE '".$service."%'";
        $result = mysqli_query($conn,$sql);
        header("location:pro/admin/pricing.php");
    }

    
    if(isset($_POST['add1'])){
        $service = $_POST['service'];
        $sql = "insert into packages (id,services) values(1,'$service')";
        $result = mysqli_query($conn,$sql);
    }
    if(isset($_POST['add2'])){
        $service = $_POST['service'];
        $sql = "insert into packages (id,services) values(2,'$service')";
        $result = mysqli_query($conn,$sql);
    }
    if(isset($_POST['add3'])){
        $service = $_POST['service'];
        $sql = "insert into packages (id,services) values(3,'$service')";
        $result = mysqli_query($conn,$sql);
    }
    if(isset($_POST['add4'])){
        $service = $_POST['service'];
        $sql = "insert into packages (id,services) values(4,'$service')";
        $result = mysqli_query($conn,$sql);
    }

    if(isset($GET['updatePrice'])){
        $input = $_GET['updatePrice'];
        $id = $_GET['id'];
        $sql = "update pricing set price = $input where id=$id";
        $result = mysqli_query($conn,$sql);
    }

    $price = array();
    $query = "select * from pricing";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($result)){
        $price[$row['plan']] = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['price']);

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <?php include("include/head_links.php"); ?>

</head>
<body>
    <div class="cont">
        <?php include("include/dash_design.php"); ?>

        <section class="admin-section">
            <?php include("include/header.php"); ?>

            <div class="title">
                <p>packages</p>
            </div>    
            <div class="package-body">
                <div class="box">
                    <h3>basic plan</h3>
                    <div class="price">
                        <h4>₹<?=$price['basic']?>/- </h4>
                        <input type="text" name="price" placeholder="Enter new price" class="price-input" style="display:none;margin-bottom:1rem;" />
                        <button class="button edit" name="edit1" id="1">edit</button>
                        <button class="button update" name="edit1" id="1" style="display:none;margin:auto;margin-top:.3rem;">update</button>
                    </div>
                    
                    <table>
                        <tr>
                            <th>services</th>
                            <th>actions</th>
                        </tr>
                        <?php
                            $query = "select * from packages where id=1";
                            $res = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($res)){
                                echo '
                                <tr>
                                    <td>'. $rows['services'] .'</td>
                                    <td><button class="button remove" id="'. $rows['id'] .'">remove</button></td>
                                </tr>
                                ';
                            }
                        ?>
                    </table>
                    
                    <form action="pricing.php" method="post">
                        <p>Add a service</p>
                        <input type="text" name="service" class="service-input" required/>
                        <input type="submit" name="add1" class="button add" value="add"/>  
                    </form>
                </div>

                <div class="box">
                    <h3>premium plan</h3>
                    <div class="price">
                        <h4>₹<?=$price['premium']?>/- </h4>
                        <input type="text" name="basic-price"   placeholder="Enter new price" class="price-input" style="display:none;margin-bottom:1rem;" />
                        <button class="button edit" name="edit" id="2">edit</button>
                        <button class="button update" name="edit2" id="2" style="display:none;margin:auto;margin-top:.3rem;">update</button>
                    </div>
                    
                    <table>
                        <tr>
                            <th>services</th>
                            <th>actions</th>
                        </tr>
                        <?php
                            $query = "select * from packages where id=2";
                            $res = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($res)){
                                echo '
                                <tr>
                                    <td>'. $rows['services'] .'</td>
                                    <td><button class="button remove" id="'. $rows['id'] .'">remove</button></td>
                                </tr>
                                ';
                            }
                        ?>
                    </table>
                    
                    <form action="" method="post">
                        <p>Add a service</p>
                        <input type="text" name="service" class="service-input" required/>
                        <input type="submit" name="add2" class="button add"  value="add"/>  
                    </form>
                </div>

                <div class="box">
                    <h3>ultimate plan</h3>
                    <div class="price">
                        <h4>₹<?=$price['ultimate']?>/- </h4>
                        <input type="text" name="basic-price" placeholder="Enter new price" class="price-input" style="display:none;margin-bottom:1rem;" />
                        <button class="button edit" name="edit" id="3">edit</button>
                        <button class="button update" name="edit3" id="3" style="display:none;margin:auto;margin-top:.3rem;">update</button>
                    </div>
                    
                    <table>
                        <tr>
                            <th>services</th>
                            <th>actions</th>
                        </tr>
                        <?php
                            $query = "select * from packages where id=3";
                            $res = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($res)){
                                echo '
                                <tr>
                                    <td>'. $rows['services'] .'</td>
                                    <td><button class="button remove" id="'. $rows['id'] .'">remove</button></td>
                                </tr>
                                ';
                            }
                        ?>
                    </table>
                    
                    <form action="" method="post">
                        <p>Add a service</p>
                        <input type="text" name="service" class="service-input" required/>
                        <input type="submit" name="add3" class="button add" value="add"/>  
                    </form>
                </div>

                <div class="box">
                    <h3>absolute plan</h3>
                    <div class="price">
                        <h4>₹<?=$price['absolute']?>/- </h4>
                        <input type="text" name="basic-price"   placeholder="Enter new price" class="price-input" style="display:none;margin-bottom:1rem;" />
                        <button class="button edit" name="edit" id="4">edit</button>
                        <button class="button update" name="edit4" id="4" style="display:none;margin:auto;margin-top:.3rem;">update</button>
                    </div>
                    
                    <table>
                        <tr>
                            <th>services</th>
                            <th>actions</th>
                        </tr>
                        <?php
                            $query = "select * from packages where id=4";
                            $res = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($res)){
                                echo '
                                <tr>
                                    <td>'. $rows['services'] .'</td>
                                    <td><button class="button remove" id="'. $rows['id'] .'">remove</button></td>
                                </tr>
                                ';
                            }
                        ?>
                    </table>
                    
                    <form action="" method="post">
                        <p>Add a service</p>
                        <input type="text" name="service" class="service-input" required/>
                        <input type="submit" name="add4" class="button add" value="add"/>  
                    </form>
                </div>
            </div>

        </section>
    </div>

    <script>
        function changeDisplay(e){
            let price_input = e.target.parentNode.querySelector(".price .price-input");
            let price = e.target.parentNode.querySelector("h4");
            price_input.style.display="block";
            price_input.style.margin="auto";
            price.style.display="none";
            console.log(price,price_input);
        }
        var deletes = document.getElementsByClassName('remove');
      
        Array.from(deletes).forEach((element)=>{
            element.addEventListener("click", (e)=>{

            var itemId = e.target.id;
            var service = e.target.parentNode.parentNode.getElementsByTagName("td")[0].innerText.split(" ");
            // console.log(itemId,service[0]);
            if(confirm("Are you sure you want to delete this service!")){
                window.location = `/pro/admin/packages.php?remove=${itemId}&service=${service[0]}`;
            }
            else {
                console.log("NO");
            }
            })
        })

        var edits = document.getElementsByClassName('edit');
        var updates = document.getElementsByClassName('update');

        Array.from(edits).forEach((element) =>{
            element.addEventListener("click", (e)=>{
                changeDisplay(e);
                var temp = e.target.parentNode.getElementsByTagName("h4")[0].innerText;
                e.target.style.display = "none";
                e.target.parentNode.getElementsByTagName("button")[1].style.display = "block";
                
            })
        })


        Array.from(updates).forEach((element) =>{
            element.addEventListener("click", (e) =>{
                let price = e.target.parentNode.querySelector("h4");
                let input = e.target.parentNode.querySelector(".price .price-input").value;
                let id = e.target.id;
                console.log(input,id);
                price.style.display = "block";
                e.target.parentNode.getElementsByClassName("price-input").style.display = "none";
                e.target.style.display = "none";
                e.target.parentNode.getElementsByTagName("button")[0].style.display = "block";
                // if(confirm(`The price will be updated to ${input}! Continue ?`)){
                //     window.location = `/pro/admin/packages.php?updatePrice=${input}&id=${id}`;
                // }
                // else {
                //     console.log("NO");
                // }
            })
        })
    </script>
</body>
</html>