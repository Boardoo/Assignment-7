<!DOCTYPE html>
<html lang="en">
<head>
<?php include{'include.header.php'}; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<li><a href="index.php">Home</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="rooms.php">Rooms</a></li>
          <li><a href="contact.php">Contact</a></li>
    
    <div class="container">
    <h1>Welcome!</h1>
    <?php
        include('include/config.php');
        $email = $_POST['email'];
        $sqp = "SELECT * FROM subscribe WHERE email = '$email'";
        $result = mysqli_query($con,$sql);
        $row = </div>
</body>
</html>