<?php 
include("./db_connect.php");

$month = $_GET['month'];
$year = $_GET['year'];

$sql = "select wedding_date from booking where MONTH(wedding_date)=$month and YEAR(wedding_date)=$year";
$result = mysqli_query($conn,$sql);
if($result){
    $data = array();

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    $jsonResult = json_encode($data);
    echo $jsonResult;
}
else{
    echo mysqli_error($conn);
}

?>