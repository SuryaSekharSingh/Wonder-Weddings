<?php 
include("include/db_connect.php");
$sql = "select wedding_date from booking";
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