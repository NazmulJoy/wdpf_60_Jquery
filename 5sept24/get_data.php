<?php 
$db = new mysqli("localhost:3310","root","","jquery");

$id = $_GET['id'];

 $data = $db->query("SELECT * FROM data WHERE id = '$id'");
    $row = $data->fetch_assoc();
    echo $row['id']." ".$row['name']." ".$row['details'];
//echo "Hello php";
// $cities = array(
//     1=> "City of mosque",
//     2=> "Popular for rasmalai",
//     3=> "Best for mangoes",
//     4=> "City of rain"
// );
// echo $cities[$id];
?>