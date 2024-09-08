<?php 
    require_once('db_config.php');
    $id = $_POST['id'];
    $result = $db->query("DELETE FROM `students` WHERE `id` = '$id'");
    if ($db->affected_rows) {
        echo "Successfully Deleted";
    } else {
        echo "Failed to Delete";
    }
?>