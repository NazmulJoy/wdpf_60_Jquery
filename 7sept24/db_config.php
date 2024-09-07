<?php
    define('host','localhost:3310');
    define('usr','root');
    define('pwd', '');
    define('database', 'jquery');
    $db = new mysqli();

    @$db->connect(host,usr,pwd);
    @$db->select_db(database);
    if($db->connect_errno){
        echo $db->connect_error;
        exit(); 
    }
    echo $db->error;
?>