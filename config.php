<?php

/*
This file contain Database Configuration, running mysql with user "roor" and pass ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');

//Now connecting the data base

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//checking the connection

if($conn == false){
    echo '<script>console.log("Error Database Not connected")</script>';
}
else{
    echo '<script>console.log("Database connected")</script>';
}
?>