<?php

/*mysql://bef5368dd5de39:44d1b1e9@us-cdbr-east-03.cleardb.com/heroku_4e5e8e7a134ee78?reconnect=true */

$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    /*echo "success";
}
else{*/
    die("Error" . mysqli_connect_error());
}


?>