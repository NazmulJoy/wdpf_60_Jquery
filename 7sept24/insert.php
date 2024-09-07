<?php 
    require_once('db_config.php');
     $serialData = $_POST['mydata'];
    parse_str($serialData,$data);
    //print_r($data);
    $name = $data['name'];
    $gender = $data['gender'];
    $dob = $data['dob'];
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];
    $result = $db->query("INSERT INTO `students` VALUES (NULL,'$name','$dob','$gender','$email','$phone','$address')");
    if($db->affected_rows){
        echo "Successfully inserted";
    }
?>