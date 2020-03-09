<!DOCTYPE html>
<html lang="en">
<head>
<?php include{'include.header.php'}; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="sideright">
<?php

    include('include/config.php');
    
    $arrivedate = $_POST('arrivedate');
    $departdate = $_POST('departdate');
    $room = $_POST('room');
    $guest = $_POST('guest');
    $email = $_POST('email');
    $message = $_POST('message');

    $sql = "INSERT INTO reserve(arrivedate, departdate, room, guest, email, message) values('$arrivedate', '$departdate', '$room', '$email', '$guest', '$message')";

    if(!mysqli_query($con,$sql)){
        
        echo "New Contact Not Added";
    }
    else{
        echo "<script> alert('Room reserved, Check your email for more details!')</script>";
    }
    </div>
    
</body>
</html>