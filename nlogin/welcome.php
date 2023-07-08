<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $travel = $_POST["travel"];
    $pam = $_POST["pam"];
    $sql = "INSERT INTO `travel` (`travelid`, `travel`, `pam`, `created`) VALUES (NULL, '$travel', '$pam', current_timestamp())";
    $result = mysqli_query($conn, $sql);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>EVENT</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <div class="container my-4">
     <h1 class="text-center">CREATE TRAVEL EVENT</h1>
     <form action="/login/welcome.php" method="post">
        <div class="form-group">
            <label for="username">TRAVEL DESTINATION</label>
            <input type="text" class="form-control" id="travel" name="travel" >
            
        </div>
        <div class="form-group">
            <label for="password">PACKAGE AMOUNT</label>
            <input type="text" class="form-control" id="pam" name="pam">
        </div>
        <a href="event.php">CREATE QUERY</a>
    </form>
    </div>
    