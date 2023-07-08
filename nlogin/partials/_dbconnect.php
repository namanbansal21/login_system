<?php
$server = "localhost";
$username = "root";
$password = "123456";
$database = "my_oauth_db";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
